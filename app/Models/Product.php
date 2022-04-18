<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    public function details()
    {
        return $this->hasMany(Detail::class, 'product_id');
    }
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manu_id');
    }
}
