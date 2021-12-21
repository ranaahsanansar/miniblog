<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function show_post() {
        $posts = Post::paginate(3);
        return view('dashboard' , ['posts' => $posts]);
    }
}
