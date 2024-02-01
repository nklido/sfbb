<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function postalCode(){
        return $this->belongsTo(PostalCode::class,'postal_code_id');
    }

    public function numbers(){
        return $this->hasMany(StreetNumber::class,'street_id');
    }
}
