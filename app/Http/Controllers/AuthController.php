<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    // Afficher le formulaire d'inscription
    public function login()
    {
        return view('auth.login'); // Vue pour le formulaire d'inscription
    }

    // Gestion de l'inscription de l'utilisateur
    public function loginForm(Request $request)
    {
        // Validation des données de l'inscription
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // Assurez-vous que le mot de passe est confirmé
        ]);

        // Gérer les erreurs de validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Création d'un nouvel utilisateur
        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        // Rediriger vers la page d'accueil après inscription
        return redirect()->route('home')->with('success', 'Inscription réussie. Bienvenue sur la page d\'accueil.');    }

    // Afficher le formulaire de connexion
    public function connexion()
    {
        return view('auth.connexion'); // Vue pour le formulaire de connexion
    }

    // Gestion de la connexion de l'utilisateur
    public function connexionForm(Request $request)
    {
        // Validation des données de connexion
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);

        // Tenter de connecter l'utilisateur avec les informations fournies
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Vérifier le rôle de l'utilisateur connecté
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Rediriger l'administrateur vers sa page d'accueil spécifique
                return redirect()->route('admin.dashboard')->with('success', 'Connexion réussie. Bienvenue sur le tableau de bord administrateur.');
            } else {
                // Rediriger l'utilisateur simple vers sa page d'accueil
                return redirect()->route('frontend.home')->with('success', 'Connexion réussie. Bienvenue sur la page d\'accueil.');
            }
        }

        // Si la tentative de connexion échoue
        return back()->withErrors(['email' => 'Les informations de connexion sont incorrectes.']);
    }


    // Déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout(); // Déconnecter l'utilisateur
        return redirect()->route('connexion')->with('success', 'Déconnexion réussie.');
    }
}
