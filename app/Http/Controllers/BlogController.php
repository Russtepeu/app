<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(post $post)
  {
         $posts = Post::all();
         $users = User::all();
        $posts = Post::withCount('comments')->get();
      return view('pages.blog.index', ['posts'=>$posts, 'users' =>$users]);
  }
}
