<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $id = 'id_place';
    protected $table = 'place';
    protected $fillable = [
        'name',
        'description',
        'history',
    ];
}
