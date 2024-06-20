<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function byUser(User $user){
        $articles = $user->articles()->orderBy('created_at','desc')->get();
        return view('article.by-user', compact('user', 'articles'));

    }
}
