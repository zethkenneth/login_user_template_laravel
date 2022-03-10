<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Users::all();
        return view('users.index',['users',$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $request->validate([
            'user_lastname' => 'required',	
            'user_firstname' => 'required',	
            'user_middlename' => 'required',	
            'user_extname' => 'required',	
            'email' => 'required|email|unique:users',	
            'password' => 'required',
            'password_confirm' => 'required',	
            'user_type' => 'required'
        ]);

  

        $data = Users::create([
            'user_lastname' => $request->input('user_lastname'),	
            'user_firstname' => $request->input('user_firstname'),	
            'user_middlename' => $request->input('user_middlename'),	
            'user_extname' => $request->input('user_extname'),	
            'email' => $request->input('email'),	
            'password' => Hash::make($request-> input('password')),	
            'user_type' => $request->input('user_type')
        ]);

        if($data){
            return redirect('/users')->with('mssg','Successfully Saved.');
        } else{
            return redirect('/users')->with('mssg','UNsuccessfully Saved.');
        }

        
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

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email',	
            'password' => 'required'  
        ]);

        $user = Users::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('user_id', $user-> user_id);
                return redirect('/users');
            } else{
                return back()->with('fail', 'Invalid Password');
            }
        } else{
            return back()->with('fail', 'email is unresgistered!');
        }
    }

    public function register(Request $request)
    {
        //
        $request->validate([
            'user_lastname' => 'required',	
            'user_firstname' => 'required',	
            'user_middlename' => 'required',	
            'user_extname' => 'required',	
            'email' => 'required|email|unique:users',	
            'password' => 'required',
            'password_confirm' => 'required',	
            'user_type' => 'required'
        ]);

        $res = Users::create([
            'user_lastname' => $request->input('user_lastname'),	
            'user_firstname' => $request->input('user_firstname'),	
            'user_middlename' => $request->input('user_middlename'),	
            'user_extname' => $request->input('user_extname'),	
            'email' => $request->input('email'),	
            'password' => Hash::make($request-> input('password')),	
            'user_type' => $request->input('user_type')
        ]);

        if($res){
            return back()->with('success', 'You have registerd Successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
 
    }
}
