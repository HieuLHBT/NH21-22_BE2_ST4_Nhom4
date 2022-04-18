<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
<<<<<<< HEAD
    // protected $primaryKey = [ 'product_id', 'payment_id'];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function payments()
    {    
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    
=======
    
    public function products()
    {
        
        return $this->morphedByMany(Product::class, 'products');
    }
    public function payments()
    {
        
        return $this->morphedByMany(Payment::class, 'payments');
    }
    protected $primaryKey = 'product_id';
>>>>>>> c6d3ab907315ca81168c6631f4d576684bb58007
}
