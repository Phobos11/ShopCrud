<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index()
    {
        $index  = Produit::all();
        return view("shop.welcome", compact("index"));
    }


    public function create()
    {
        return view('shop.create');
    }


    public function store(Request $request)
    {
        $request->validate([
        'titre' => 'required',
        'prix' => 'required'
    ]);
        $produit= new Produit();
        $produit->titre =  $request->get('titre');
        $produit->prix =  $request->get('prix');
        $produit->description =  $request->get('description');
        $produit->save();
        return redirect()->route('produits.index')->with('success','Company has been created successfully.');
    }


    public function show($id)
    {
            $produit = Post::find($id);
        return view('produits.show',compact('produit'));
    }


    public function edit($id)
    {
        $produit = Produit::find($id);
        return view("shop.update",compact('produit'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'titre'=> 'required|max:255',
            'prix'=> 'required'
        ]);
        $produit = Produit::find($id);
        $produit->titre = $request->get('titre');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->save();
        return redirect()->route('produits.index');
    }

    public function destroy($id)
    {
        $produit =Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index');

    }
}
