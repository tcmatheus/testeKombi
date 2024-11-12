<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Certifique-se de que o modelo Contact está importado
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'celular' => 'required|string',
        ]);

        // Salva os dados no banco de dados
        Contact::create($validated);

        // Adiciona os dados ao log
        Log::info('Orçamento enviado', $validated);

        // Retorna uma resposta de sucesso
        return redirect()->back()->with('success', 'Contato enviado com sucesso!');
    }
}
