<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "social_url",
        "icon_svg",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
