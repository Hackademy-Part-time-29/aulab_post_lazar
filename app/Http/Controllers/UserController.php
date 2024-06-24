<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class UserController extends Controller implements HasMiddleware
{ 
    public static function middleware(){
        return[
            new Middleware('auth', except:['homepage']),
        ];
    }
    public function byUser(User $user){
        $articles = $user->articles()->orderBy('created_at','desc')->get();
        return view('article.by-user', compact('user', 'articles'));

    }
    public function careers(){
        return view('careers');
    }
    
    public function careersSubmit(Request $request){
        $request->validate([
            'role'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
    }
}
