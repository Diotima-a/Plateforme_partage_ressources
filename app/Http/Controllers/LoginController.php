<?php
namespace App\Http\Controllers\Auth;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller // Changez AuthController en LoginController
{
    public function showLoginForm()
    {
        return view('login'); // Retourne la vue de formulaire de connexion
    }

    public function login(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirection après connexion réussie
            return redirect()->route('HomePage')->with('success', 'Connexion réussie !');
        }

        // Redirection en cas d'échec de connexion
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Déconnexion de l'utilisateur
        return redirect()->route('HomePage')->with('success', 'Déconnexion réussie !');
    }
}
