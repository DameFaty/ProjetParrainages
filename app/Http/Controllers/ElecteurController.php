<?php

namespace App\Http\Controllers;

use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function indexElec(){
        $listElec = Electeur::all();
        return view('list_electeurs',compact('listElec'));
    }

    public function create()
    {
        return view('ajout_electeur');
    }


    public function store(Request $request)
    {
       // try {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'cni' => 'required',
                'adresse' => 'required',

            ]);
          
           
            Electeur::create($request -> all());
          
            return redirect()->route('liste-electeur');
        }



}
