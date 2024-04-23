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
            return $this->BelongsToMany(Job::class)
            ->using(GroupJob::class)
            ->withPivot('active')
            ->withTimestamps();
        
        }



}
