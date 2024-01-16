<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgrammeController extends Controller
{
    public function indexPro(){
        $listPro = Programme::all();
        return view('list_programmes',compact('listPro'));
     }



    public function create()
    {
        return view('ajout_programme');
    }

    public function store(Request $request)
    {
       // try {
          /*  $request->validate([
                'titre' => 'required',
                'contenu' => 'required',
                'document' => 'required',
            ]);

            $document = $request->document->extension();
            $request->document->move(public_path('Programmes_file'), $document); */
          
            //Programme::create($request -> all());

            $pro = new Programme();
            $pro->titre = $request->titre;
            $pro->contenu = $request->contenu;
            $file= $request->file('document');
            $fileName = $file->getClientOriginalName();
            $destination = 'Programmes_file';
            $file->move($destination,$fileName);
            $pro->document = $fileName;
            

           $pro->save();

            return redirect()->route('liste-programmes');
        }
    }
 





