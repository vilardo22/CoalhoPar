<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers'; 

    protected $primaryKey = 'uuid';
    
    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'registration_number',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
];


    public function adress()
    {
        return $this->belongsToMany(Adress::class, CustomerAdress::class);
    }
}
