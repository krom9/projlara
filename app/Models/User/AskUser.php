<?php

namespace App\Models\User;

use App\Models\Test\Ask;
use Illuminate\Database\Eloquent\Model;

class AskUser extends Model
{
    protected $table = 'ask_user';

    protected $fillable = ['id', 'user_id', 'ask_id', 'checked'];

    public function Ask()
    {
        return $this->belongsTo(Ask::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
