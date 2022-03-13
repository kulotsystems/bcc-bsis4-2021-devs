<?php

namespace App\Models;

use App\Models\Grouping;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * Get the Students associated with the Group.
     */
    public function students()
    {
        return $this->hasMany(Grouping::class);
    }
}
