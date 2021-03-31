<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
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
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $userPass = $request->input('user_password');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $contactNo = $request->input('contact_no');
        $address = $request->input('address');

        echo 'FirstName : ' . $firstName . '<br>' . 
        'LastName : ' . $lastName . '<br>' . 
        'E-mail address : ' . $email . '<br>' . 
        'Password : ' . $userPass . '<br>' . 
        'Gender : ' . $gender . '<br>' . 
        'Date of Birth : ' . $dob . '<br>' . 
        'Contact Number : ' . $contactNo . '<br>' .
        'Address : ' . $address;
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
