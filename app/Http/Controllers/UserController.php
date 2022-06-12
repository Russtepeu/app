<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.admin.dashboard.users.index', ['users' => $users]);
    }
   
    public function create()
    {
        

        return view('pages.admin.dashboard.users.create');
    }
}
