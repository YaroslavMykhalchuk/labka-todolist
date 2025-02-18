<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task5 extends Model
{
    use HasFactory;

    protected $table = 'tasks_5';

    protected $fillable = [
        'description',
        'completed',
        'priority',
    ];
}