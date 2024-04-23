<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;


    public function groups():BelongsToMany
    {

        return $this->belongsToMany(Group::class)
        ->using(GroupJob::class)
        ->withPivot('active')
        ->withTimestamps();

    }
}
