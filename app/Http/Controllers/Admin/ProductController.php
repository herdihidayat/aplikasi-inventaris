<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $products  = Product::with('category')->latest()->paginate(10);

        return view('pages.products.index', [
            "products" => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.products.create', [
            "categories" => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Nama produk/barang harus diisi!",
            "name.min" => "Minimal 3 karakter!",
            "price.required" => "Harga harus diisi!",
            "stock.required" => "Stok harus diisi!",
            "category_id.required" => "Kategori harus diisi!",
            "sku.required" => "kode produk/barang harus diisi!",
        ]);

        Product::create($validated);

        return redirect('/products')->with('success', 'Berhasil menambahkan produk/barang');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('pages.products.edit', [
            "categories" => $categories,
            "product" => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Nama produk/barang harus diisi!",
            "name.min" => "Minimal 3 karakter!",
            "price.required" => "Harga harus diisi!",
            "stock.required" => "Stok harus diisi!",
            "category_id.required" => "Kategori harus diisi!",
            "sku.required" => "kode produk/barang harus diisi!",
        ]);

        Product::where('id', $id)->update($validated);

        return redirect('/products')->with('success', 'Berhasil mengubah produk/barang');
    }


    public function delete($id)
    {
        $product = Product::where('id', $id);
        $product->delete();

        return redirect('/products')->with('success', 'Berhasil menghapus produk/barang');
    }
}
