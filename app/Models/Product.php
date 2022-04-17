<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
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
=======
>>>>>>> 4c7d1aa5cb90f964149f542c10252e1643ebbbec
}
