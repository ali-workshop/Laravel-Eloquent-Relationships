<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;


    protected $primaryKey='main_id';
    public $incrementing=False ;


   public function products():HasMany
    {
        return $this->hasMany(Products::class,'category_id','main_id');

    }
}
