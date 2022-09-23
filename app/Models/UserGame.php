<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;

    protected $table = "user_game";

    public function game()
    {
        return $this->belongsTo(Game::class, "game_id", "id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
