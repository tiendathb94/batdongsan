<?php

namespace App\Http\Controllers\Web;

use App\Entities\News;
use App\Entities\Category;
use App\Entities\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function deleteLoai($id){
        $category = Category::find($id);
        $category->delete();
        return $category;
    }
    public function editLoai($id){
        $categories = Category::where('destination_entity',Post::class)->whereNull('parent_id')->get();
        $category = Category::find($id);
        return view('default.pages.category.edit_loai',['category' => $category, 'categories' => $categories]);
    }
    public function updateLoai(Request $request,$id){
        $category = Category::find($id);
        $request_all = $request->only(['name','slug','meta_title','meta_keyword','meta_description','meta_content','parent_id']);
        $category->update($request_all);
        return redirect()->route('pages.category.list_loai');
    }
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
        return view('default.pages.category.list_hinh_thuc', ['categories' => $categories->orderBy('parent_id','DESC')->orderBy('created_at','DESC')->paginate(20), 'keyword' => $keyword]);
    }
    public function getLoai(Request $request){
        $keyword = $request->keyword;
        $categories_parent = Category::where('destination_entity',Post::class)->whereNull('parent_id')->get()->keyBy('id');
        if(empty($keyword)){
            $categories = Category::where('destination_entity',Post::class)->whereNotNull('parent_id');
        }else{
            $categories = Category::where('destination_entity',Post::class)->whereNotNull('parent_id')->where("slug",'LIKE', "%$keyword%");
        }
        return view('default.pages.category.list_loai', ['categories_parent' => $categories_parent,'categories' => $categories->orderBy('parent_id','DESC')->orderBy('created_at','DESC')->paginate(20), 'keyword' => $keyword]);
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
        $name               = $request->name;
        $slug               = $request->slug;
        $meta_keyword       = $request->meta_keyword;
        $meta_description   = $request->meta_description;
        $meta_title         = $request->meta_title;
        $meta_content       = $request->meta_content;

        $parent_id  = (int) $request->parent_id;
        try {
            $dataInsert = [
                'name' => $name,
                'slug' => $slug,
                'thumbnail' => '',
                'destination_entity' => Post::class,
                'created_at'        => now(),
                'updated_at'        => now(),
                'meta_keyword'      => $meta_keyword,
                'meta_title'        => $meta_title,
                'meta_description'  => $meta_description,
                'meta_content'      => $meta_content

            ];
            if($parent_id > 0){
                $dataInsert['parent_id'] = $parent_id;
            }
            $category = Category::insert($dataInsert);
            if($parent_id > 0){
                return  redirect()->route('pages.category.list_loai')->with('success', 'Tạo loại thành công!');
            }
            return  redirect()->route('pages.category.list_hinh_thuc')->with('success', 'Tạo hình thức thành công!');
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