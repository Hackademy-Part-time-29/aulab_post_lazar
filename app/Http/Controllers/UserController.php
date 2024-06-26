<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $articles = $user->articles()->where('is_accepted', true)->orderBy('created_at','desc')->get();
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
        $user=Auth::user();
        $role=$request->role;
        $email=$request->email;
        $message=$request->message;
        $info=compact('role','email','message');
    
        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));
    
        switch ($role){
            case 'admin':
                $user->is_admin=NULL;
                break;
            case 'revisor':
                $user->is_revisor=NULL;
                break;
            case 'writer':
                $user->is_writer=NULL;
                break;
        }
        $user->update();
        return redirect (route('homepage'))->with('message', 'Mail inviata con successo!');
    }
}
