<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicModel extends Model
{
    protected $table = 'infographic';
    protected $primaryKey = 'id';
    protected $fillable = [
        'digit', 'suffix', 'description'
    ];
    use HasFactory;
}
