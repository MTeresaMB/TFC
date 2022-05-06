<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $id = 'id_manuscript';
    protected $table = 'manuscript';
    protected $fillable = [
        'title',
        'summary',
    ];
}
