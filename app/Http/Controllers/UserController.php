<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::when(auth()->check(), function($query) {
            $query->where('id', '!=', auth()->id());
        })->paginate();

        return view('users.index', compact('users'));
    }

    public function get_followers(){
        $user = auth()->user();
        $followers = $user->followers()->get();
        return view('users.followers',compact('followers'));
    }

    public function get_followings(){
        $user = auth()->user();
        $following = $user->following()->get();
        return view('users.following',compact('following'));
    }
}
