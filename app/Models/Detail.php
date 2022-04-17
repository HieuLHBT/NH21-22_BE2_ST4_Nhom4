<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    
    public function products()
    {
        
        return $this->morphedByMany(Product::class, 'products');
    }
    public function payments()
    {
        
        return $this->morphedByMany(Payment::class, 'payments');
    }
    protected $primaryKey = 'product_id';
}
