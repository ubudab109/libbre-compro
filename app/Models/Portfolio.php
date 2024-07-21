<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    protected $fillable = [
        'uuid',
        'title',
        'sub_title',
        'description',
        'description_en',
        'demo_url',
        'client',
        'images',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'images' => 'array'
    ];
}
