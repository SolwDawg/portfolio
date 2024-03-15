<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero_Section extends Model
{
    use HasFactory;

    protected $fillable = [
        "main_role",
        "image",
        "description",
    ];
}
