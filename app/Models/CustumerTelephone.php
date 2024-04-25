<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTelephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'telephone_id',
        'main',
    ];

    protected $casts = [
        'main' => 'boolean',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'uuid');
    }

    public function telephone()
    {
        return $this->belongsTo(Telephone::class);
    }
}
