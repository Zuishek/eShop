<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function getEdit() {
        $currentUser = User::where('id',Auth::user()->id)->first();
        return view('profile.edit',['currentUser'=> $currentUser]);
    }
    public function postEdit() {

        $file = Request::file('avatar');
         $dest = public_path().'/images/';
         $avName = str_random(6).'_'. $file->getClientOriginalName();
         $file->move($dest,$avName);

        $name = Request::input('name');
        $email = Request::input('email');
        $password = Request::input('password');
        
        User::where('id',Auth::user()->id)->update(['name'=>$name]);
        User::where('id',Auth::user()->id)->update(['email'=>$email]);
        User::where('id',Auth::user()->id)->update(['password'=>bcrypt($password)]);
        User::where('id',Auth::user()->id)->update(['avatar'=>$avName]);
        return redirect('/');
    }
     public function __construct() {
        $this->middleware('auth');
    }
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
