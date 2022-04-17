<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function details()
    {
        
        return $this->morphToMany(Detail::class, 'details');
        
    }
    public function users()
    {
        return $this->belongsTo(Manufacture::class, 'manufacturers');
    }
    public function manufacturers()
    {
        return $this->hasMany(Manufacture::class);
    }
}
