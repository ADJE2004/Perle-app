<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AdminController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('admin.dashboard', compact('products'));
   }

     // Afficher la gestion des utilisateurs
     public function manageUsers()
     {
         // Récupérer tous les utilisateurs
         $users = User::all();

         // Retourner la vue de gestion des utilisateurs
         return view('admin.manage-users', compact('users'));
     }

     // Fonction pour afficher la page de création d'un nouveau produit
     public function createProduct()
     {
         return view('admin.create-product');
     }

     // Fonction pour sauvegarder un nouveau produit dans la base de données
     public function storeProduct(Request $request)
     {
         // Validation des données du formulaire
         $request->validate([
             'nom' => 'required|string|max:255',
             'description' => 'required|string',
             'prix' => 'required|numeric',
             'quantite' => 'required|integer',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image
         ]);

         // Sauvegarder le produit
         $product = new Product();
         $product->nom = $request->nom;
         $product->description = $request->description;
         $product->prix = $request->prix;
         $product->quantite = $request->quantite;

         // Sauvegarder l'image si elle est présente
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('images', 'public'); // Enregistrer l'image dans le dossier public/images
             $product->image = $imagePath;
         }

         $product->save();

         // Rediriger vers le tableau de bord de l'admin avec un message de succès
         return redirect()->route('admin.dashboard')->with('success', 'Produit ajouté avec succès.');
     }
}
