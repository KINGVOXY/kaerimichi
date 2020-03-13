<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup() {
        return View('user.signup');//viewを返す
    }

    public function postSignup(Request $request){
        // バリデーション
        $this->validate($request,[
            'id' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:4'
        ]);
    
        // DBインサート
        $user = new User([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);
        
        // 保存
        $user->save();
        
        // リダイレクト
        return redirect()->route('user.profile');
    }

    public function getProfile(){
        return view('user.profile');
    }
}
