<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    //
    public function register() {
		return view('poster.register');
	}

}
