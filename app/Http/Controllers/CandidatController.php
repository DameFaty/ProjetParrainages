<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
    public function indexCan(){
        $listCan = Candidat::all();
        return view('candidat.list_candidats',compact('listCan'));
     }

     // app/Http/Controllers/CandidatController.php
   // public function parrainer(Candidat $candidat)
  //  {
        // Logique pour incrémenter le compteur de parrainages pour le candidat
    //    $candidat->increment('nombre_parrainages');

        // Rediriger ou renvoyer une réponse appropriée
     //   return redirect()->route('liste-candidats')->with('success', 'Parrainage réussi.');
  //  }


    public function create()
    {
        return view('candidat.ajout_candidat');
    }

    public function store(Request $request)
    {
       // try {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'parti' => 'required',
                'programme' => 'required',
                'valide' => 'required',
                'photo' => 'required|mimes:jpeg,png,gif,jpg|max:1000',
            ]);
          
            $photo = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('Candidat'), $photo);
            Candidat::create($request -> all());
           /* $candidat = new Candidat();
            $candidat->nom = $request->nom;
            $candidat->prenom = $request->prenom;
            $candidat->parti = $request->parti;
            $candidat->biographie = $request->biographie;
            $candidat->valide = $request->valide;
            $candidat->photo = $photo; */
    
           // $candidat->save();
            return redirect()->route('liste-candidat');
        }
    }
 





