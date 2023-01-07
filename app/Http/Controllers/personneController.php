<?php

namespace App\Http\Controllers;

use App\Models\personne;
use Illuminate\Http\Request;

class personneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data=personne::all();
            // compact pour rendre data compresser et n'est pas sous la forme json
            return view ('listeCarnet',compact('data'));
        }
    }
    public function store(Request $request)
    {
      $p=new Personne();
      $p->id= $request->id;
      $p->nom=$request->nom;
      $p->prenom=$request->prenom;
      $p->tel=$request->tel;
      $p->email=$request->email;
      $p->addresse=$request->adresse;
$p->save();
$data= personne::all();
return view('listeCarnet',Compact('data'));
    }
    public function recherche(Request $request)
    {
       
       
       
        $data=personne::all()-> where('id', $request->id);
        return view("listeCarnet",compact('data'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $p= personne::find($request->id);
        $p->nom=$request->nom;
        $p->prenom=$request->prenom;
        $p->tel=$request->tel;
        $p->email=$request->email;
        $p->addresse=$request->add;
        $p-> save();
        $data=personne::all();

        // compact pour rendre data compresser et n'est pas sous la forme json
        return view ('listeCarnet',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       personne::where('id' , $request->id )->delete() ;
       $data= personne::all();
       return view ('listeCarnet',Compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function show(personne $personne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function edit(personne $personne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personne  $personne
     * @return \Illuminate\Http\Response
     */
  
  
}
