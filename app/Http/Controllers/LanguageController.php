<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request, $lang)
    {
        // Assurez-vous que la langue est valide avant de la définir
        $supportedLanguages = ['fr', 'en']; // Ajoutez d'autres langues au besoin

        if (in_array($lang, $supportedLanguages)) {
            Session::put('locale', $lang);
           
        }

        // Redirigez l'utilisateur vers la page précédente ou une page par défaut
        return redirect()->back();
    }
}
