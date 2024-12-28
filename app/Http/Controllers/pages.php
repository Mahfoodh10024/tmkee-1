<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function index(Request $request)
    {

        $currentpage  = $request->query('page',1);

        $nexpage = (int)$currentpage + 1;

        $prevpage = (int)$currentpage - 1;


        return view('add_project',compact('currentpage','nexpage'));
    }


}
