<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    /**
     * --------------------------------------------------------------------------------
     * 新規登録認証
     */
    public function getSignup() {
        return View('user.signup');// viewを返す
    }

    // 頼む...動いてくれ...!
    public function postSignup(Request $request){
        // バリデーション
        // まずはidとpassとしてちゃんと入力されているか
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

    /**
     * --------------------------------------------------------------------------------
     * リダイレクト先 
     */

    // 新規登録の場合
    public function getProfile(){
        return view('user.profile');
    }
    

    /**
     * --------------------------------------------------------------------------------
     * ログイン認証
     */

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        // バリデーション
        // まずはidとpassとしてちゃんと入力されているか
        $this->validate($request,[
        'id' => 'required',
        'password' => 'required|min:4'
        ]);

        // okだったらリダイレクトするぜええええ!!!
        if(Auth::attempt(['id' => $request->input('id'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');// ユーザープロフィールにリダイレクト
        }
        return redirect()->back();
    }

    /**
     * --------------------------------------------------------------------------------
     * ログアウト
     */
    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.signin');
    }

}
