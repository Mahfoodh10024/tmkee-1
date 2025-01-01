<?php

namespace App\Http\Controllers;

use App\Models\user_projects;
use Illuminate\Http\Request;

class UserProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('questions');
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
        $pro = new user_projects;

        $pro->name = $request->name;
        $pro->type = $request->type;
        $pro->budget = $request->budget;
        $pro->description = $request->description;
        $pro->paid = 'none';
        $pro->project_status = 'reviewing';
        $pro->project_period = 'none';
        $pro->tools = 'none';
        $pro->executer = 'none';
        $pro->save();

        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(user_projects $user_projects)
    {

        return view('main',compact('user_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_projects $user_projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user_projects $user_projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_projects $user_projects)
    {
        //
    }
}
