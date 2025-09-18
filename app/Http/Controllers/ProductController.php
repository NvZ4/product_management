<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk 
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    // Menampilkan form untuk membuat produk baru 
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru ke database 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit produk 
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Memperbarui data produk di database
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk dari database 
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil dihapus.');
    }
}