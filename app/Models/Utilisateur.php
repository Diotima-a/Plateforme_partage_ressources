<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Importez la classe Authentifiable
use Illuminate\Notifications\Notifiable; // Importez Notifiable si vous souhaitez l'utiliser

class Utilisateur extends Authenticatable // Étendez la classe Authentifiable
{
    use Notifiable; // Utilisez le trait Notifiable si nécessaire

    protected $table = 'user_details'; // Spécifiez le nom de la table

    protected $fillable = [
        'name',
        'email',
        'password',
        'type_utilisateur',
        'date_naissance',
    ];

    // Si vous souhaitez que le mot de passe soit caché lors de la sérialisation
    protected $hidden = [
        'password',
    ];
}
