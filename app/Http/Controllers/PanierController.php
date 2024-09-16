<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index(){
        $panier = session()->get('cart', []); // Récupère le panier depuis la session
        return view('frontend.panier', compact('panier'));
    }

    public function addpanier($id)
    {
        $product = Product::findOrFail($id);
        $panier = session()->get('panier', []);

        // Si le produit existe déjà dans le panier, augmentez la quantité
        if (isset($panier[$id])) {
            $panier[$id]['quantity']++;
        } else {
            // Sinon, ajoutez le produit au panier
            $panier[$id] = [
                'nom' => $product->nom,
                'quantité' => 1,
                'prix' => $product->prix,
                'image' => $product->image,
            ];
        }

        session()->put('panier', $panier);
        return redirect()->back()->with('success', 'Produit ajouté au panier !');
    }

    // Supprimer un produit du panier
    public function deletepanier($id)
    {
        $panier = session()->get('panier', []);

        if (isset($panier[$id])) {
            unset($panier[$id]);
            session()->put('panier', $panier);
        }

        return redirect()->back()->with('success', 'Produit retiré du panier.');
    }
}
