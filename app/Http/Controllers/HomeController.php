<?php

namespace App\Http\Controllers;

use App\Models\Test\Test;
use App\Models\User\TestUser;

class HomeController extends Controller
{
    public function index()
    {
        $breadcrumbs = ['home' => ''];

        return view('tests.index')->with(compact('breadcrumbs'));
    }
}
