<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    // NECESSARIO PER FILL()
    protected $fillable = ["name","color","description","price"];
}
