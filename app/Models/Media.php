<?php

namespace App\Models;

use App\Enums\MediaTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $casts = [
        "type" => MediaTypesEnum::class,
    ];
}
