<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $id = 'id_article';
    protected $table = 'article';
    protected $fillable = [
        'name',
        'description',
    ];
}
