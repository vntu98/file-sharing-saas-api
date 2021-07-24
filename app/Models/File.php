<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class File extends Model
{
    use HasFactory;

    public static function booted()
    {
        static::creating(function ($file) {
            $file->uuid = Str::uuid();
        });
    }

    protected $fillable = [
        'name',
        'path',
        'size'
    ];
}
