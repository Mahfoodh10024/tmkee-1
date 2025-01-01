<?php

namespace App\Http\Controllers;

use App\Models\users_accounts;
use Illuminate\Http\Request;

class UsersAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create');
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
    public function store(Request $request)
    {

        // $validator = Validator::make($request->all(),[
        //     'password' => 'required|string|min:8',
        //     'policy' =>   'required'
        // ]);
        
        // if($validator->fails()){
        //     return response()->json(['error'=>$validator->errors()],422);
        // }
        // else if($validator->valid()){

        //     $cred = $request->only('email','password');

        //     if(Auth::attempt($cred)){
        //         $request->session()->put('user_status', 'login');


        //         Useraccount::create([
        //             'name'=>$request->name,
        //             'phone'=>$request->phone,
        //             'city'=>$request->city,
        //             'email'=>$request->email,
        //             'password'=>$request->password,
        //             'policy'=>$request->policy,
        //         ]);

        //         return redirect()->intended('main'); 
        //     }

        // }
        users_accounts::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'email'=>$request->email,
            'password'=>$request->password,
            'policy'=>$request->policy,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(users_accounts $users_accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users_accounts $users_accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users_accounts $users_accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users_accounts $users_accounts)
    {
        //
    }
}
