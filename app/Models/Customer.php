<?php

namespace App\Models;
use App\Models\Company;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	// configure  the model to retrieve an array with data on his construction
	//protected $fillable = ['name', 'email', 'status'];

	// allow everything, not conventional but convenient for the training
	protected $guarded = [];
    //use HasFactory;

    public function scopeStatus($query) {
    	return $query->where('status', True)->get();
    }
     public function company() {
    	return $this->belongsTo(Company::class);
    }
}
