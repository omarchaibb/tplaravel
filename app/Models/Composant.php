<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Composant extends Model
{
    use HasFactory;

    public function plats()
    {
        return $this->belongsToMany(Plat::class);
    }
}
