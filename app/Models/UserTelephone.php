<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTelephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telephone_id',
        'main',
    ];

    protected $casts = [
        'main' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'uuid');
    }

    public function telephone()
    {
        return $this->belongsTo(Telephone::class);
    }
}
