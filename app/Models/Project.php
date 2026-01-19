<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tags',
        'code_link',
        'demo_link',
        'order'
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
