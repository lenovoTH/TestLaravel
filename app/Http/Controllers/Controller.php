<?php

namespace App\Http\Controllers\API;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use App\Http\Controllers\Controller;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class TestController extends Controller
{
    public function index()
    {
        // On récupère tous les produits
        $produits = Test::all();

        // On retourne les informations des produits en JSON
        return response()->json($produits);
    }

    public function store(Request $request)
    {
        // La validation de données
        $this->validate($request, [
            'libelleP' => 'required|max:100|unique',
            'prixP' => 'required',
            'stockP' => 'required'
        ]);

        // On crée un nouveau produit
        $produit = Test::create([
            'libelleP' => $request->lib,
            'prixP' => $request->prix,
            'stockP' => $request->stock
        ]);

        // On retourne les informations du nouveau produit en JSON
        return response()->json($produit, 201);
    }

    public function destroy(Test $produit)
    {
        // On supprime le produit
        $produit->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
