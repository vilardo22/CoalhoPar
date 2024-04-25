<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
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
}
