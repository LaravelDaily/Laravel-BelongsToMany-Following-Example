<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::when(auth()->check(), function($query) {
            $query->where('id', '!=', auth()->id());
        })->paginate();

        return view('users.index', compact('users'));
    }
}
