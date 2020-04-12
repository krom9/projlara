<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;
use App\Models\Test\Test;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;

class ListController extends Controller
{
    public function getTests($userId)
    {
        $user = User::firstWhere('id', $userId);
        if($user->role_id !== 2)
        {
            $userId = 0;
        }
        $tests = ($userId === 0)
            ? Test::all()
            : Test::where('author_id', $userId)
                ->orderBy('id')
                ->get();
        return response()->json($tests);
    }
}
