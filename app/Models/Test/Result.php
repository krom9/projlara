<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['id', 'test_id', 'min', 'max', 'text'];

    public function Test()
    {
        return $this->belongsTo(Test::class);
    }
}
