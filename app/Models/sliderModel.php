<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliderModel extends Model
{
    protected $table = 'slider';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'description', 'image'
    ];
    use HasFactory;
}
