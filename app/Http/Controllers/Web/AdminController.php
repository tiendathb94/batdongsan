<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword','');
        if(!empty($keyword)){
            $users = User::where('fullname', 'LIKE', '%' . $keyword . '%')->paginate(20);
        }else{
            $users = User::where('id','!=',1)->paginate(20);
        }
        return view($this->_config['view'], ["users" => $users, "keyword" => $keyword]);
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('default.pages.admin.show',['user' => $user]);
    }

    public function updateUser($id,Request $request){
        $user = User::findOrFail($id);
        $userUpdate = $request->only(['fullname','phone','date_of_birth','gender']);
        $user->update($userUpdate);
        return  redirect()->route('admin.index')->with('success', 'Cập nhật thành công!');
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return true;
    }
}
