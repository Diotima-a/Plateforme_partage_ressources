<?php
namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Retourne la vue de formulaire d'inscription
    }

    public function register(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_details,email',
            'password' => 'required|min:8|confirmed',
            'type_utilisateur' => 'required|in:stagiaire,formateur,admin',
            'date_naissance' => 'required|date',
        ]);

        // Création de l'utilisateur dans la table user_details
        $utilisateur = Utilisateur::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'type_utilisateur' => $validatedData['type_utilisateur'],
            'date_naissance' => $validatedData['date_naissance'],
        ]);

        // Connexion automatique de l'utilisateur après l'inscription
        Auth::login($utilisateur);

        // Redirection après inscription
        return redirect()->route('home')->with('success', 'Inscription réussie !');
    }
}
