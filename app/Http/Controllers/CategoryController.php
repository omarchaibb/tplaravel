<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getPlatbyCategoy(Request $request)
    {
        $categorie = Category::find($request->input("category"));
        $plats = $categorie->plats;
        return $plats;
    }
}
