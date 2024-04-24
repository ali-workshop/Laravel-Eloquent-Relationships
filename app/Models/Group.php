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
            // the second parameter is the pivote table name. idont need it if i respect the convention.
            // the convention is  alphabeta in the name G then J and singlaur in naming the pivote model so i call it GroupJob
            return $this->BelongsToMany(Job::class,'group_job')
            ->using(GroupJob::class)
            ->withPivot('active')
            ->withTimestamps();
        
        }



}
