<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 * @package App\Models\Test
 */
class Answer extends Model
{

    protected $fillable = ['id', 'text', 'test_id'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function asks()
    {
        return $this->hasMany(Ask::class);
    }
}
