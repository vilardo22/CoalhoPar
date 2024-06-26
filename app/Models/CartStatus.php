<?php

namespace App\Models;

use App\Enums\CartStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStatus extends Model
{
    use HasFactory;

    protected $casts = [
        "status" => CartStatusEnum::class,
    ]; 
}
