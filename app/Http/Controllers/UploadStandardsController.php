<?php

namespace App\Http\Controllers;

use App\Models\upload_standards;
use Illuminate\Http\Request;

class UploadStandardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        upload_standards::create([
            
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(upload_standards $upload_standards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(upload_standards $upload_standards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, upload_standards $upload_standards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(upload_standards $upload_standards)
    {
        //
    }
}
