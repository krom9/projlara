<?php

namespace App\Models\User;

use App\Models\Test\Test;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    protected $table = 'test_user';

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public  function user()
    {
        return $this->belongsTo(User::class);
    }
}
