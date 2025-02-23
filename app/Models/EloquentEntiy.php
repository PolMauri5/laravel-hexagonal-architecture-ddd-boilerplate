<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EloquentEntiy extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'created_at',
        'updated_ar',
    ];
}
