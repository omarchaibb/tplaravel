<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Commande;
use App\Models\Composant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plat extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function composants()
    {
        return $this->belongsToMany(Composant::class);
    }

    public function commands()
    {
        return $this->belongsToMany(Commande::class);
    }
    
}
