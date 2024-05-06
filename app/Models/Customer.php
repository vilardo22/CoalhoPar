<?php

// app/Models/Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; 

    protected $primaryKey = 'id';
    
    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'registration_number',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    public function addresses()
    {
        return $this->belongsToMany(Address::class,CustomerAddress::class);
    }
}

