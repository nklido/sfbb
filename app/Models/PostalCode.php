<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function streets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Street::class,'postal_code_id');
    }

    public function scopeAthens($query){
        $query->whereBetween('code',[10443,12461]);
    }


}
