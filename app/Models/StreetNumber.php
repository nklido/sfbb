<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetNumber extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function street(){
        return $this->belongsTo(Street::class,'street_id');
    }

    public function getDescriptionAttribute(){
        return $this->street->postalCode->code.' '.$this->street->name.' '.$this->number;
    }
}
