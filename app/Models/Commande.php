<?php

namespace App\Models;

use App\Models\Plat;
use App\Models\Serveur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;


    public function plats()
    {
        return $this->belongsToMany(Plat::class);
    }


    public function serveur()
    {
        return $this->belongsTo(Serveur::class);
    }

}
