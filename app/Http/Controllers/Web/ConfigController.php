<?php

namespace App\Http\Controllers\Web;

use App\Entities\ConfigBanner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index(){
        $config = DB::table("config")->first();
        return view("default.pages.config.index",["config" => $config]);
    }
    public function indexConfigFooter(){
        $config = DB::table("config_footer")->first();
        return view("default.pages.config.footer",["config" => $config]);
    }
    public function updateConfig(Request $request){
        try {
            $dataUpdate = $request->all();
            unset($dataUpdate['_token']);
            $config = DB::table("config")->where("id",1)->update($dataUpdate);
            return back()->with('success', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            return back()->with('error', 'Thao tác thất bại!');
        }
    }
    public function updateConfigFooter(Request $request){
        try {
            $dataUpdate = $request->all();
            unset($dataUpdate['_token']);
            $config = DB::table("config_footer")->where("id",1)->update($dataUpdate);
            return back()->with('success', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            return back()->with('error', 'Thao tác thất bại!');
        }
    }
    public function configBanner(Request $request){
        $keyword = $request->keyword;
        $banners = DB::table('config_banner')->paginate();
        return view("default.pages.config.banner",["banners" => $banners, "keyword" => $keyword]);
    }
    public function storeBanner(Request $request){
        $name   = $request->name;
        if($request->has('image')){
            $uploadedFilePath = $request->file('image')->storePublicly('/public/uploads/images/banner');
            try {
                $banner = ConfigBanner::create([
                    "image"     => str_replace('public', '', $uploadedFilePath),
                    "name"      => $name,
                    "active"    => 1
                ]);
                return redirect()->route('config.banner');
            } catch (\Throwable $th) {
                \Log::info($th->getMessage());
                return back()->with('error', 'Thao tác thất bại!');
            }
        }
    }
    public function deleteBanner($id){
        $config = ConfigBanner::find($id);
        $config->delete();
        return $config;
    }
}
