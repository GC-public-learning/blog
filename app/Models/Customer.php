<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	// configure  the model to retrieve an array with data on his construction
	protected $fillable = ['name', 'email', 'status'];
    //use HasFactory;

    public function scopeStatus($query) {
    	return $query->where('status', True)->get();
    }
}
