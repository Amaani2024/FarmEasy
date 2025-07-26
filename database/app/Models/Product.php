<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // To allow mass assignment on these fields:
    protected $fillable = ['name', 'price'];
}
