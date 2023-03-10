<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected function iamge(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/events/' . $value),
        );
    }
}
