<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;

    // Tambahkan ini supaya bisa mass assignment
    protected $fillable = ['name', 'description', 'days_done', 'last_done'];
}
