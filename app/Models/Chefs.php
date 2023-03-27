<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'post',
        'facebook',
        'twitter',
        'instagram',
        'image',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
