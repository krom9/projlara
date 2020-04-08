<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{

    protected $fillable = ['id', 'text', 'mark', 'answer_id'];

    public function Answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
