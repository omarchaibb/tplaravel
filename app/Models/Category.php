<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function plats()
    {
        return $this->hasMany(Plat::class);
    }
}
