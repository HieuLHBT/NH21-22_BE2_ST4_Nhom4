<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $primaryKey = 'product_id';
    public function details()
    {
        return $this->hasMany(Detail::class, 'product_id');
    }
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manu_id');
    }
=======
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
>>>>>>> c6d3ab907315ca81168c6631f4d576684bb58007
}
