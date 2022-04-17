<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'payment_id';
    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_id');
    }
}
