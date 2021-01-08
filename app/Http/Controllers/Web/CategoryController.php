<?php

namespace App\Http\Controllers\Web;

use App\Entities\News;
use App\Entities\Category;
use App\Entities\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {   
        $category = Category::whereSlug($slug)->firstOrFail();
        $news = $category->news()->whereStatus(News::APPROVED)
            ->paginate(config('app.category.news.paginate'));
        $data = [
            'news' => $news,
            'category' => $category
        ];
        return view('default.pages.category.show', $data);
    }

    public function getHinhThuc(Request $request){
        $keyword = $request->keyword;
        if(empty($keyword)){
            $categories = Category::where('destination_entity',Post::class)->whereNull('parent_id');
        }else{
            $categories = Category::where('destination_entity',Post::class)->where("slug",'LIKE', "%$keyword%")->whereNull('parent_id');
        }
        return view('default.pages.category.list_hinh_thuc', ['categories' => $categories->orderBy('created_at','DESC')->paginate(20), 'keyword' => $keyword]);
    }
    public function getLoai(Request $request){
        $keyword = $request->keyword;
        if(empty($keyword)){
            $categories = Category::where('destination_entity',Post::class)->whereNotNull('parent_id');
        }else{
            $categories = Category::where('destination_entity',Post::class)->whereNotNull('parent_id')->where("slug",'LIKE', "%$keyword%");
        }
        return view('default.pages.category.list_loai', ['categories' => $categories->orderBy('created_at','DESC')->paginate(20), 'keyword' => $keyword]);
    }
    public function createHinhThuc(){
        return view('default.pages.category.create_hinh_thuc');
    }
    public function createLoai(){
        $categories = Category::where('destination_entity',Post::class)->whereNull('parent_id')->get();
        return view('default.pages.category.create_loai',['categories' => $categories]);
    }
    public function storeLoai(Request $request){
        $request->flash();
        $this->newsValidate();
        $name       = $request->name;
        $slug       = $request->slug;
        $parent_id  = (int) $request->parent_id;
        try {
            $dataInsert = [
                'name' => $name,
                'slug' => $slug,
                'thumbnail' => '',
                'destination_entity' => Post::class,
                'created_at' => now(),
                'updated_at' => now()
            ];
            if($parent_id > 0){
                $dataInsert['parent_id'] = $parent_id;
            }
            $category = Category::insert($dataInsert);
            if($parent_id > 0){
                return  redirect()->route('pages.category.list_loai')->with('success', 'Tạo loại thành công!');
            }
            return  redirect()->route('pages.category.list_hinh_thuc')->with('success', 'Tạo loại thành công!');
        } catch ( \Exception $e ) {
            return back()->with('error', 'Thao tác thất bại!');
        }
    }

    public function newsValidate()
    {
        return request()->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
    }
}