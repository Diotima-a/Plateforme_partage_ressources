<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié
        if (Auth::check()) {
            $user = Auth::user();

            // Redirige selon le type d'utilisateur
            switch ($user->type_utilisateur) {
                case 'formateur':
                    return redirect()->route('formateur');
                case 'stagiaire':
                    return redirect()->route('stagiaire');
                case 'admin':
                    return redirect()->route('admin');
                default:
                    return redirect()->route('HomePage');
            }
        }

        // Si l'utilisateur n'est pas connecté, redirige vers la page de connexion
        return redirect()->route('login');
    }
}
