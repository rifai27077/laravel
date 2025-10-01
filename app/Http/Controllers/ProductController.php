<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        $query = Product::query();
        if (request('search')) {
            $query->where('nama', 'like', '%' . request('search') . '%');
        }
        $products = $query->orderBy('id', 'desc')->paginate(5);
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);
        $maxId = Product::max('id');
        $validated['id'] = $maxId ? $maxId + 1 : 1;
        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambah!');
    }

    public function show(Product $product)
    {
        
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);
        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
