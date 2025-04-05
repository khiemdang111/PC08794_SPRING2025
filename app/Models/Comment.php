<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'name',
        'comment',
        'status',
        'product_id'
    ];
}
