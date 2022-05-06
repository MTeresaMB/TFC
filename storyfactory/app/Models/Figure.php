<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    use HasFactory;
    protected $id = 'id_figure';
    protected $table = 'figure';
    protected $fillable = [
        'nameFigure',
        'biography',
        'role',
        'flaw',
        'external_motivation',
        'internal_motivation',
        'positive_traits',
        'negative_traits',
        'quirks_mannerisms',
        'motto',
        'build',
        'hair_color',
        'hair_style',
        'eye_color',
        'scars',
    ];
}
