<?php
namespace App\Http\Controllers\Auth;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
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
            // Récupérer l'utilisateur connecté
            $utilisateur = Auth::user();

            // Redirection en fonction du type d'utilisateur
            switch ($utilisateur->type_utilisateur) {
                case 'stagiaire':
                    return redirect()->route('stagiaire')->with('success', 'Connexion réussie !');
                case 'formateur':
                    return redirect()->route('formateur')->with('success', 'Connexion réussie !');
                case 'admin':
                    return redirect()->route('admin')->with('success', 'Connexion réussie !');
                default:
                    return redirect()->route('home')->with('success', 'Connexion réussie !');
            }
        }

        // Redirection en cas d'échec de connexion
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Déconnexion de l'utilisateur
        return redirect()->route('home')->with('success', 'Déconnexion réussie !');
    }
}
