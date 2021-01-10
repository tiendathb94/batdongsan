<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index(){
        $config = DB::table("config")->first();
        return view("default.pages.config.index",["config" => $config]);
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
}
