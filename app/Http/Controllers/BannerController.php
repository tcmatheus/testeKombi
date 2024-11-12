<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Exibe a lista de banners.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Mostra o formulário para criar um novo banner.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Armazena um novo banner.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'imagem' => 'required|image',
            'titulo' => 'required|string',
            'descricao' => 'required|string',
        ]);

        // Salva a imagem no diretório 'banners' e armazena o caminho no banco de dados
        $data['imagem'] = $request->file('imagem')->store('banners');

        Banner::create($data);

        return redirect()->route('banners.index')->with('success', 'Banner criado com sucesso.');
    }

    /**
     * Mostra o formulário de edição de um banner.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Atualiza um banner existente.
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'imagem' => 'nullable|image',
            'titulo' => 'required|string',
            'descricao' => 'required|string',
        ]);

        // Atualiza a imagem se um novo arquivo for carregado
        if ($request->hasFile('imagem')) {
            // Remove a imagem antiga
            if ($banner->imagem) {
                Storage::delete($banner->imagem);
            }
            $data['imagem'] = $request->file('imagem')->store('banners');
        }

        $banner->update($data);

        return redirect()->route('banners.index')->with('success', 'Banner atualizado com sucesso.');
    }

    /**
     * Remove um banner.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->imagem) {
            Storage::delete($banner->imagem);
        }
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner removido com sucesso.');
    }
}
