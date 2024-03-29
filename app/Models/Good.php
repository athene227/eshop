<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    const DEFAULT_IMAGE = "default.png";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buyers()
    {
        return $this->belongsToMany(User::class);
    }
}
