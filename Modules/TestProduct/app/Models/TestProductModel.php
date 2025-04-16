<?php

namespace Modules\TestProduct\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\TestProduct\Database\Factories\TestProductModelFactory;

class TestProductModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): TestProductModelFactory
    // {
    //     // return TestProductModelFactory::new();
    // }
}
