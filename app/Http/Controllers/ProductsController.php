<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('index',['product'=>$product]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
        ]);

        if ($request->hasFile('gambar_produk')) {

            $request->validate([
                'gambar_produk' => 'mimes:jpeg,bmp,png'
            ]);

            $name = $request->file('gambar_produk')->getClientOriginalName();

            $image_name = $name;

            $request->file('gambar_produk')->move(public_path('images'), $image_name);
            $product = new Product;   
            $product->nama_produk = $request->get('nama_produk');
            $product->deskripsi_produk = $request->get('deskripsi_produk');
            $product->gambar_produk = $image_name;
            $product->save();            
        } else {
            return "error";
        }

        return redirect()->route('index')->with('success', 'Produk berhasil ditambahkan');
    }
}
