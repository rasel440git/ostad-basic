<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todotask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'task_heading',
        'task_desc',        
    ];
}
