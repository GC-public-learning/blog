<?php

namespace App\Models;
use App\Models\Customer;



//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
    protected $guarded = [];
    //use HasFactory;
    public function customers() {
        return $this->hasMany(Customer::class);
    }
}
