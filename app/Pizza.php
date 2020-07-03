<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas'; //use pizzas table in database for this model
    protected $casts = [
         //castings toppings automatically to array so we can save it in database 
        'toppings' => 'array'
    ];
   
}
