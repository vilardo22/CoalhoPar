<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable =[
        "street",
        "number",
        "complement",
        "neighborhood",
        "zip_code",
        "city",
        "state",
        "country",
    ];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, CustomerAddress::class);
    }
}
