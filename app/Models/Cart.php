<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
    ];

    protected $primaryKey = 'id'; // Definir a chave primária

    public $incrementing = false; // Indicar que a chave primária não é autoincrementável

    protected $keyType = 'string'; // Tipo da chave primária

    public function getIncrementing()
    {
        return false; // Garantir que a chave primária não seja autoincrementável
    }

    public function getKeyType()
    {
        return 'string'; // Definir o tipo da chave primária como string
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'uuid');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
