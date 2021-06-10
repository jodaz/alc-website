<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::count();

        $articles = Post::count();

        return view('dashboard.modules.dashboard.index', compact('users', 'articles'));
    }
}
