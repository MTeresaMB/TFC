<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $id = 'id_chapter';
    protected $table = 'chapter';
    protected $fillable = [
        'title',
        'summary',
    ];
}
