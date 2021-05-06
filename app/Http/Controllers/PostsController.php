<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->join('users','posts.user_id','=','users.id')->select('posts.*','users.name')->orderBy('posts.id', 'desc')->paginate(3);
        // $posts = Posts::orderBy('id', 'desc')->Paginate(3);
        // $author = Users::find($posts->user_id);
        // $posts->author = $author->name;
        return view('posts')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required | max:100',
            'body'=>'required',
            'cover_image'=>'image | max:50000'
        ]);

        $title =$request->input('title');
        $body = $request->input('body');

        $post = new Posts();
        $post->title = $title;
        $post->body = $body;
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNametoStore = $fileName.'_'.rand(10,1000).time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNametoStore);
            $post->cover_image = $fileNametoStore;
        }
        
        $post->save();

        return redirect('/post/create')->with('success', 'Post Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        $author = Users::find($post->user_id);
        $post->author = $author->name;
        return view('show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Posts::find($id);
        return view('edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title'=>'required | max:100',
            'body'=>'required',
            'cover_image'=>'image | max:50000'
        ]);
        $title =$request->input('title');
        $body = $request->input('body');

        $post = Posts::find($id);
        $post->title = $title;
        $post->body = $body;
        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNametoStore = $fileName.'_'.rand(10,1000).time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNametoStore);
            $post->cover_image = $fileNametoStore;
        }
        
        $post->save();

        return redirect('/post')->with('updated', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('/post')->with('deleted', 'Post Deleted');
    }
}
