<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function details()
    {
        
            return $this->morphToMany(Detail::class, 'details');
        
    }
    public function users()
    {
        return $this->hasMany(User::class, 'username');
    }
    protected $primaryKey = 'username';
}
