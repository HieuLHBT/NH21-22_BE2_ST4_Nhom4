<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $primaryKey = 'payment_id';
    public function details()
    {
        return $this->hasMany(Detail::class, 'payment_id');
    }
=======
    public function details()
    {
        
            return $this->morphToMany(Detail::class, 'details');
        
    }
    public function users()
    {
        return $this->hasMany(User::class, 'username');
    }
    protected $primaryKey = 'username';
>>>>>>> c6d3ab907315ca81168c6631f4d576684bb58007
}
