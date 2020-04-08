<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function Test()
    {
        return $this->belongsTo(Test::class);
    }
}
