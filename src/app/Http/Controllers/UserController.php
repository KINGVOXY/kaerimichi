<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getSignup() {
        return View('user.signup');//viewを返す
    }

    /**
     * 頼む...動いてくれ...!
     */
    public function postSignup(Request $request){
        // バリデーション
        $this->validate($request,[
            'id' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:4'
        ]);
    
        // DBに入れます
        $user = new User([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);
        
        // 保存するぜやっほー
        $user->save();
        
        // リダイレクトして完了じゃいッ...!
        return redirect()->route('user.profile');
    }

    public function getProfile(){
        return view('user.profile');
    }
}
