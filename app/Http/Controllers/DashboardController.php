<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $id = auth()->user()->id;
        $posts = Posts::where('user_id','=',$id)->orderBy('id','desc')->get();
        return view('dashboard')->with('posts',$posts);
    }
}
