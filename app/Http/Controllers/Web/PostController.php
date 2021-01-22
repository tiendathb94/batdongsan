<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Post;
use App\Entities\Province;
use App\Entities\District;
use App\Entities\Ward;
use App\Entities\Category;
use App\Entities\Project;
use App\Http\Requests\SavePostRequest;
use App\Entities\Address;
use App\Entities\ImageLibrary;

use DB;


class PostController extends Controller
{
    public function postList($slug){
        $category = Category::query()->where('destination_entity', Post::class)->whereSlug($slug)->first();
        if(is_null($category->parent_id) OR $category->parent_id == 0){
            $posts = Post::query()->where('form',$category->id);
        }else{
            $posts = Post::query()->where('category_id',$category->id);
        }
        return view('default.pages.posts.listing_post',["category" => $category, "posts" => $posts->paginate()]);
    }
    public function postDetail($categorySlug, $postSlug){    
        $category = Category::whereSlug($categorySlug)->first();
        $post = Post::with('category')->where('form',$category->id)->where('slug',$postSlug)->first();
        return view('default.pages.posts.post_detail', ['post' => $post]);
    }

    public function createSell()
    {
        return view($this->_config['view']);
    }
    public function updateSell(Request $request,$id){
        $user_id = auth()->id();
        $post = Post::find($id);
        $post->title        = $request->title;
        $post->slug         = $request->slug;
        $post->category_id  = $request->category_id;
        $post->content  = $request->content;
        $post->total_area   = $request->total_area;
        $post->price        = $request->price;
        $post->price_unit  = $request->price_unit;
        $post->way_in  = $request->way_in;
        $post->facade  = $request->facade;
        $post->direction_house  = $request->direction_house;
        $post->direction_balcony  = $request->direction_balcony;
        $post->number_of_floors  = $request->number_of_floors;
        $post->number_of_bedroom  = $request->number_of_bedroom;
        $post->number_of_toilet  = $request->number_of_toilet;
        $post->furniture  = $request->furniture;
        $post->legal_information  = $request->legal_information;
        $post->save();
        $address = Address::where('addressable_type',Post::class)->where('addressable_id',$post->id)->first();
        $address->province_id = $request->province_id;
        $address->district_id = $request->district_id;
        $address->ward_id = $request->ward_id;
        $address->address = $request->address;
        $address->save();
        if($request->has('image')){
            $uploadedFilePath = $request->file('image')->storePublicly('/public/uploads/images/library');
            $image = ImageLibrary::where('image_libraryable_type',Post::class)->where('image_libraryable_id',$id)->first();
            if(is_null($image)){
                ImageLibrary::insert([
                    'image_libraryable_type' => Post::class,
                    'file_path' => str_replace('public', '', $uploadedFilePath),
                    'user_id' => $user_id,
                    'meta_data' => '',
                    'library_type' => Post::class,
                    'image_libraryable_id' => $id
                ]);
            }else{
                $image->file_path = str_replace('public', '', $uploadedFilePath);
                $image->save();
            }
        }
        return redirect(route("posts.list_sell"));
    }
    public function editSell($id){
        $post = Post::with('address')->with('category')->with('project')->with('imageLibraries')->find($id);
        return view($this->_config['view'],['post' => $post]);
    }
    public function editPost($id)
    {
        $provinces = Province::all();
        $wards = Ward::all();
        $projects = Project::all();
        $post = Post::with('category')->find($id);
        $categories = Category::where('parent_id',$post->category->id)->get();
        $address = Address::where('addressable_type',Post::class)->where('addressable_id',$post->id)->first();
        $districts = District::where('province_id',$address->province_id)->get();
        $wards = Ward::where('district_id',$address->district_id)->get();
        $price_unit =  Post::CATEGORIES[$post->category->slug];
        $data = [
            'categories' => $categories,
            'provinces' => $provinces,
            'districts' => $districts,
            'wards' => $wards,
            'projects' => $projects,
            'post'     => $post,
            'address'   => $address,
            'price_unit' => $price_unit,
            'direction' => Post::DIRECTIONS
        ];
        
        return view($this->_config['view'],$data);
    }

    public function listSell(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
        $checkPermission = checkRule($user);
        $categorySellHouse = Category::whereSlug(Post::SELL_HOUSE)->first();
        $categoryLeaseHouse = Category::whereSlug(Post::LEASE_HOUSE)->first();
        $posts = Post::with('category')->whereIn('form', [$categorySellHouse->id, $categoryLeaseHouse->id]);
        if(!$checkPermission){
            $posts = $posts->where('user_id',$user_id);
        }
        if($request->title) {
            $posts->where('title', 'like', "%$request->title%");
        }
        return view($this->_config['view'], ['posts' => $posts->orderByDesc('created_at')->paginate(20)]);
    }

    public function listBuy(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
        $checkPermission = checkRule($user);
        $categoryBuyHouse = Category::whereSlug(Post::HOUSE_BUY)->first();
        $categoryRentHouse = Category::whereSlug(Post::HOUSE_RENT)->first();
        $posts = Post::with('category')->whereIn('form', [$categoryBuyHouse->id, $categoryRentHouse->id]);
        if(!$checkPermission){
            $posts = $posts->where('user_id',$user_id);
        }
        if($request->title) {
            $posts->where('title', 'like', "%$request->title%");
        }
        return view($this->_config['view'], ['posts' => $posts->orderByDesc('created_at')->paginate(10)]);
    }

    public function createBuy()
    {
        $categories = Category::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();
        $projects = Project::all();

        $data = [
            'categories' => $categories,
            'provinces' => $provinces,
            'districts' => $districts,
            'wards' => $wards,
            'projects' => $projects
        ];
        return view($this->_config['view'], $data);
    }

    public function store(SavePostRequest $request)
    {
        DB::beginTransaction();
        try {
            $user_id = auth()->id();

            $uploadedFilePath = $request->file('image')->storePublicly('/public/uploads/images/library');
            $category = Category::whereSlug($request->slug)->first();
            
            $createPost = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'slug' => $request->slug,
                'form' => $category->id,
                'category_id' => $request->category_id,
                'total_area' => $request->total_area,
                'price' => $request->price,
                'user_id' => $user_id,
                'status' => 0,
                'approval'  => 1
            ]);
            
            $address['addressable_id'] = $createPost->id;
            $address['addressable_id'] = $createPost->id;
            $address['province_id'] = $request->province_id;
            $address['district_id'] = $request->district_id;
            $address['ward_id'] = $request->ward_id;
            $address['address'] = $request->address;
            
            $createPost->address()->create($address);
            $createPost->imageLibraries()->create([
                'image_libraryable_type' => Post::class,
                'library_type'           => Post::class,
                'file_path' => str_replace('public', '', $uploadedFilePath),
                'user_id' => $user_id,
                'meta_data' => '',
            ]);
            DB::commit();
            return  redirect()->route('posts.list_buy')->with('success', 'Đăng thành bài thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
            return back()->with('error', 'Thao tác thất bại!');
        }
    }

    public function getDistrict(Request $request)
    {
        $respon = [
            'districts' => Province::findOrFail($request->id)->districts()->orderBy('name')->get(),
        ];
        return response()->json($respon);
    }

    public function getWard(Request $request)
    {
        $respon = [
            'wards' => District::findOrFail($request->id)->wards()->orderBy('name')->get(),
        ];
        return response()->json($respon);
    }

    public function deleteSell($id){
        $post = Post::find($id);
        $post->delete();
        return $post;
    }
}
