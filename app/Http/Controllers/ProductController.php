<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::oldest()->paginate(5);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ], [
            'name.required' => 'O campo Nome é obrigatório.',
            'detail.required' => 'O campo Detalhes é obrigatório.',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Produto criado com sucesso.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ], [
            'name.required' => 'O campo Nome é obrigatório.',
            'detail.required' => 'O campo Detalhes é obrigatório.',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produto eliminado com sucesso.');
    }
}