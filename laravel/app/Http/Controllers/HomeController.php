<?php

namespace App\Http\Controllers;
use App\Models\FileDatabase;
use App\Models\Post;
use App\Models\Informasi;
use App\Models\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_file = FileDatabase::all()->count();
        $count_post = Post::all()->count();
        $count_informasi = Informasi::all()->count();
        $count_user = User::all()->count();

        return view('home', compact('count_file', 'count_post', 'count_informasi', 'count_user'));
    }
}
