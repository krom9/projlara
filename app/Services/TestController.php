<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\Test\Test;
use App\Models\User\TestUser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getTests()
    {
        if(auth()->check())
        {
            $user = auth()->user();
            if($user->role_id === 2)
            {
                $tests = Test::where('author_id', $user->id)->get();
            } else {
                $tests = Test::all();
            }

            return $tests;
        }

        return false;
    }
}
