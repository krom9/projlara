<?php

namespace App\Servers;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::where('role_id', '!=', 3)
            ->with('role')
            ->orderBy('role_id')
            ->orderBy('name')
            ->get();

        return $users;
    }
}
