<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function addedBy(User $user) {
        return $this->carts->contains('user_id',$user->id);
    }

    public function carts() {
        return $this->hasMany(Carts::class);
    }

}
