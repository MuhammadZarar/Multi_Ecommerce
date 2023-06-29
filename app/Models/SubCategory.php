<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'sub_category', 'sub_slug', 'date', 'status', 'code'];

}
