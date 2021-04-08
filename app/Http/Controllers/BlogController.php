<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
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
            'username'=>'required | max:10',
            'password'=>'required | min:5',
            'cover_image'=>'required | image | max:1999'
        ]);

        $user = $request->input('username');
        $password = $request->input('password');
        
        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNameToStore = $fileName.'_'.rand(10,1000).time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
            move_uploaded_file($fileNameToStore, 'public/cover_image');
            echo $fileNameWithExt.'<br>';
            echo $ext.'<br>';
            echo $fileName.'<br>';
            echo $fileNameToStore.'<br>';
            echo $path.'<br>';
        }
        // $data = array(
        //     'user'=>$user,
        //     'password'=>$password,
        //     'image'=>$fileNameToStore,
        // );
        
        // return view('blog')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
