<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class featuresTopModel extends Model
{
    protected $table = 'features_top';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image', 'title', 'description'
    ];
    use HasFactory;
}
