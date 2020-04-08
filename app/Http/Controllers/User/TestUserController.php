<?php

namespace App\Http\Controllers;

use App\Models\User\TestUser;
use Illuminate\Http\Request;

class TestUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param  \App\Models\TestUser  $testUser
     * @return \Illuminate\Http\Response
     */
    public function show(TestUser $testUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestUser  $testUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TestUser $testUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestUser  $testUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestUser $testUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestUser  $testUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestUser $testUser)
    {
        //
    }
}
