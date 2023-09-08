<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $uName = $request->input('user');
    $password = $request->input('password');
    if (Auth::attempt(['name' => $uName, 'password' => $password])) {
        $userinfo = Auth::user();
        // dd($userinfo);
        if($userinfo->is_admin == 1){
            return redirect()->route('Admin');
        }else{
            return redirect()->route('home');
        }
    } else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Request $request)
    {
        // dd($request->all());
        $result = $user->create([
            'name' => $request->user,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password,
        ]);
    
        return redirect()->route('login');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
