<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function createCategory(){
        $categories = new Category();
        $categories->category_name = "test";
        $categories->category_desp = "test test";
        $categories->image = "test test test";
        $categories->save();
    }
}
