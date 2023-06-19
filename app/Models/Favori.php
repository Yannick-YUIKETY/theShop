<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{   protected $fillable = ['category_id','user_id'];
    use HasFactory;
}
