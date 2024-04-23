<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;


    public function category():BelongsTo
    {
        // parameter are : the class name ,the forien id for the current class
        return $this->belongsTo(Category::class,'category_id');

    }

}
