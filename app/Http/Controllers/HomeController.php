<?php

namespace App\Http\Controllers;

use App\Models\Banner; // Importa o modelo Banner
use App\Models\Faq;    // Importa o modelo Faq
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial com banners e FAQs.
     */
    public function index(): View
    {
        // Busca todos os banners e FAQs do banco de dados
        $banners = Banner::all();
        $faqs = Faq::all();

        // Retorna a view (home ou welcome) com os dados dos banners e FAQs
        return view('welcome', compact('banners', 'faqs')); // Altere 'welcome' para 'home' se estiver usando 'home.blade.php'
    }
}
