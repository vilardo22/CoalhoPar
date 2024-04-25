<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'address_id',
        'name',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'uuid');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
