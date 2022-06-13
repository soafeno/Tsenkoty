<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandModel extends Model
{
    use HasFactory;
    protected $table='';
    protected $fillable =['Numero','Date','Heure','Produit','Montant','Client','Paiement','Livraison'];
}