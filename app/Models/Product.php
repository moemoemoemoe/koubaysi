<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 public function the_product(){
    	return $this->belongsTo('App\Models\ProductCategory','category_id');
    }
    use HasFactory;
}

