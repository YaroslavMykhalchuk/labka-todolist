<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task4 extends Model
{
    use HasFactory;

    protected $table = 'tasks_4';

    protected $fillable = [
        'description',
        'status',
    ];
}
