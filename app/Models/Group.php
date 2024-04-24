<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    public function jobs():BelongsToMany
        {
            // the second parameter is the pivote table.
            return $this->BelongsToMany(Job::class,'group_job')
            ->using(GroupJob::class)
            ->withPivot('active')
            ->withTimestamps();
        
        }



}
