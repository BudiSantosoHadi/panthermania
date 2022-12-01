<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsadminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = products::latest()->paginate(6);
        return view('pages.admin.products.index', [
            'title' => "products",
            'active' => "products.active"
        ], compact(['product']));
    }

    public function create()
    {
        return view('pages.admin.products.create', [
            'title' => "products",
            'active' => "products.active"
        ]);
    }

    // view

    public function show(products $product)
    {
        return view('pages.admin.products.view', [
            'title' => "products",
            'active' => "products.active"
        ], compact('product'));
    }

    public function store(Request $request)
    {
        // validate form
        $this->validate($request, [
            'gambar_products' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'nama_products' => 'required|min:5',
            'harga_products' => 'required|min:4',
            'kontak_admin' => 'required|min:9',
            'publish' => 'required|min:3',
        ]);


        // upload images
        $image = $request->file('gambar_products');
        $image->storeAs('public/path/', $image->hashName());


        // create products
        products::create([
            'gambar_products' => $image->hashName(),
            'nama_products' => $request->nama_products,
            'harga_products' => $request->harga_products,
            'kontak_admin'  => $request->kontak_admin,
            'publish' => $request->publish
        ]);

        // redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // edit

    public function edit(products $product)
    {
        return view('pages.admin.products.edit', [
            'title' => "products",
            'active' => "products.active"
        ], compact('product'));
    }

    // update

    public function update(Request $request, products $products)
    {
        $this->validate($request, [
            'gambar_products' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'nama_products' => 'required|min:5',
            'harga_products' => 'required|min:4',
            'kontak_admin' => 'required|min:9',
            'publish' => 'required|min:3',
        ]);

        // check if images is upload
        if ($request->hasFile('gambar_products')) {
            // upload new images
            $image = $request->file('gambar_products');
            $image->storeAs('public/path/', $image->hashName());

            // delete old images
            Storage::delete('public/path/' . $products->$image);

            $products->update([
                'gambar_products' => $image->hashName(),
                'nama_products' => $request->nama_products,
                'harga_products' => $request->harga_products,
                'kontak_admin'  => $request->kontak_admin,
                'publish' => $request->publish
            ]);
        } else {

            // products update without image
            $products->update([
                'nama_products' => $request->nama_products,
                'harga_products' => $request->harga_products,
                'kontak_admin'  => $request->kontak_admin,
                'publish' => $request->publish
            ]);
        }

        // redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil DiUbah!!']);
    }



    // destroy hapus data
    public function destroy(products $products)
    {

        // delete images
        Storage::delete('public/path/' . $products->gambar_products);

        // delete products
        $products->delete();
        // redirect to index
        if ('success') {
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil diHapus!!']);
        } else {
            return redirect()->route('products.index')->with(['danger' => 'Data Tidak Berhasil DiUbah!!']);
        }
    }
}