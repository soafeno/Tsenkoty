<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    use HasFactory;
    protected $table='Client';
    protected $fillable =['CodeClient','Nom', 'Prenom','Age','Contact','Lien','Identifiant'];
}