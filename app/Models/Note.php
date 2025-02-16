<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory; // Enables Eloquent factories

    protected $fillable = ['note', 'user_id']; // Defines which fields can be mass assigned
}
