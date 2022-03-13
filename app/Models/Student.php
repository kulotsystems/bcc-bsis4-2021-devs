<?php

namespace App\Models;

use App\Models\Grouping;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    /**
     * Get the Group associated with the Student.
     */
    public function group()
    {
        return $this->hasOne(Grouping::class);
    }
}
