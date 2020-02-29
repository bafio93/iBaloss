<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {

        $prodotti=Product::all();
        return view("products.index", ["products" => $prodotti]);

    }

    public function create()
    {
        return view("products.create");
    }

    public function store(Request $request)
    {

        // dd($request);
        // PRENDO I DATI
        $formData = $request->all();
        // dd($formData);
        // GENERO NUOVA ENTITA' MODEL
        $product = new Product();
        // LA POPOLO
        $product->fill($formData);
        // SALVO NEL DATABASE
        $product->save();
        // REDIRECT
        return redirect()->route("products.index");

    }

    public function show($id)
    {

        // first() restituisce già un oggetto, e non una collection
        // $prodotto = Product::where("id",$id)->first();
        $prodotto = Product::find($id);
        // Equivalente a sopra, ovviamente, ma più comoda!
        return view("products.show", ["product" => $prodotto]);

    }

    public function edit($id)
    {
        // VIA DI MEZZO TRA CREATE E SHOW.
        // MOLTO LEGATA A UPDATE, COSì COME CREATE LO è A STORE (VEDI VIEW)
        $prodotto = Product::find($id);
        return view("products.edit", ["product" => $prodotto]);
    }

    public function update(Request $request, Product $product)
    {
        // dd($request);
        // PRENDO I DATI
        $formData = $request->all();
        // dd($formData);
        // SALVO NEL DATABASE
        $product->update($formData);
        // REDIRECT
        return redirect()->route("products.index");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index");
    }
}
