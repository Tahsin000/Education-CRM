<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicBgModel extends Model
{
    protected $table = 'infographic_bg';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
    ];
    use HasFactory;
}
