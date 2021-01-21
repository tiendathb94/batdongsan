<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Post;
use App\Entities\Address;
use App\Entities\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($id){
        return Post::with('category')->find($id);
    }
    public function getPriceUnit(Request $request)
    {
        return Post::CATEGORIES[$request->slug];
    }

    public function getDirection()
    {
        return Post::DIRECTIONS;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $category = Category::whereSlug($request->slugParent)->first();
        $data['form'] = $category->id;
        $data['category_id'] = $request->category_id;
        $data['status'] = 0;
        $data['approval'] = 1;
        $data['user_id'] = auth()->id();
        $post = Post::create($data);
        $address = $data['address'];
        $address['addressable_id'] = $post->id;
        $address['addressable_type'] = Post::class;
        Address::create($address);
        $data = [
            'message' => 'Lưu thành công',
            'data' => [
                'post' => $post
            ]
        ];
        return response()->json($data);
    }

    public function changeStatus($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $post->status = $post->status ? 0 : 1;
        $post->save();
    }
    public function changeApproval($id,Request $request)
    {
        $post = Post::whereId($id)->firstOrFail();
        $action = $request->action;
        if($action == 'approve'){
            $post->approval = 2;
        }
        if($action == 'decline'){
            $post->approval = 3;
        }
        $post->save();
    } 

    public function updatePost($id, Request $request){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Bài đăng bạn yêu cầu không tồn tại'], 400);
        }
        try {
            DB::beginTransaction();

            $allowFields = [
                'title', 'slug', 'form', 'content',
                'price_unit', 'facade', 'way_in', 'direction_house', 'direction_balcony',
                'number_of_floors', 'number_of_bedroom', 'number_of_toilet',
                'furniture','legal_information','project_id','total_area','category_id',
                'price','total_price'
            ];
            foreach ($allowFields as $field) {
                if (isset($request->{$field})) {
                    $post->{$field} = $request->{$field};
                }
            }

            // Save project
            $post->save();

            // Save address
            if ($request->has('address')) {
                $address       = $request->address;
                $addressEntity = $post->address;

                if ($addressEntity) {
                    foreach (['province_id', 'district_id', 'ward_id', 'address'] as $field) {
                        $addressEntity->{$field} = $address[$field];
                    }

                    $addressEntity->save();
                } else {
                    $post->address()->create($address);
                }
            }

            // Save tab contents
            // $tabContents = $validated['tab_contents'];
            // if ($tabContents) {
            //     foreach ($tabContents as $tabContent) {
            //         $tabContentId = !empty($tabContent['id']) ? $tabContent['id'] : 0;
            //         $tabContentEntity = $post->tabs()->findOrNew($tabContentId);
            //         foreach (['name', 'layout', 'contents'] as $field) {
            //             $tabContentEntity->{$field === 'layout' ? 'template' : $field} = $tabContent[$field];
            //         }

            //         $tabContentEntity->save();
            //     }
            // }

            DB::commit();

            return response()->noContent();
        } catch (\Exception $e) {
            Log::info($e);
            DB::rollback();
        }

        return response()->json(['message' => 'Đã có lỗi khi lưu dự án'], 500);
    }
}
