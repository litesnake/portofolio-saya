<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'year_range',
        'position',
        'institution',
        'description',
        'image',
        'instagram_link',
        'card_label',
        'order'
    ];
}
