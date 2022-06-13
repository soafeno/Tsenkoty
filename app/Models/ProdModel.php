<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdModel extends Model
{
    use HasFactory;
    protected $table='article';
    protected $fillable =['titre','designation','description','prix'];
}