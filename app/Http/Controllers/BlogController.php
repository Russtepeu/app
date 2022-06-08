<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function blog(request $request)
  {
      $posts = Post::all();
      return view('pages.blog', ['posts'=>$posts]);
  }
}
