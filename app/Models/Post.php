<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'platform',
        'link',
        'date',
        'time',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
