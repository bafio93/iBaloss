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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
