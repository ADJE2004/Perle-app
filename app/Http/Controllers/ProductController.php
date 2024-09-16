<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
         $products = Product::all();
         dd($products);
        return view('products.index', compact('products')); // Assure-toi que la vue existe
    }

    // Méthode pour afficher le formulaire de création de produit
    public function create()
    {
        return view('products.create');
    }

    // Méthode pour enregistrer un nouveau produit
    public function store(Request $request)
    {

        // Validation des données reçues
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation des images multiples
        ]);
        
        // Création du produit
        $product = new Product();
        $product->nom = $validatedData['nom'];
        $product->description = $validatedData['description'];
        $product->prix = $validatedData['prix'];
        $product->quantite = $validatedData['quantite'];

        // Gestion des images si présentes
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName(); // Génère un nom unique
                $image->move(public_path('images'), $imageName); // Déplace l'image dans le dossier public/images

                // Enregistre l'image dans une table associée si nécessaire
                 Image::create(['product_id' => $product->id, 'path' => $imageName]);
            }

            // Optionnel : Enregistre le nom d'une seule image dans le champ image du produit
            $product->image = $imageName; // Change cette logique selon comment tu souhaites stocker les images multiples
        }

        // Sauvegarde du produit
        $product->save();

        // Redirection avec un message de succès
        return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
    }


    // Affiche un produit spécifique
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Affiche le formulaire d'édition d'un produit existant
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }



    // Met à jour un produit existant
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image facultative lors de la mise à jour
        ]);

        // Trouver le produit à mettre à jour
        $product = Product::findOrFail($id);
        $product->nom = $request->nom;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->quantite = $request->quantite;

        // Mettre à jour l'image si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }

            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    // Supprime un produit
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        return redirect()->route('produc ts.index')->with('success', 'Produit supprimé avec succès.');
    }


}
