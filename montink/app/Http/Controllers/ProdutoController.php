<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Models\Produto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::latest()->paginate(5);

        return view('produtos.index', compact('produtos'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoStoreRequest $request): RedirectResponse
    {
        Produto::created($request->validated());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto Criado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto):View
    {
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit',compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutoUpdateRequest $request, Produto $produto): RedirectResponse
    {
        $produto->update($request->validated());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto Editado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto): RedirectResponse
    {
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto Apagado');
    }
}
