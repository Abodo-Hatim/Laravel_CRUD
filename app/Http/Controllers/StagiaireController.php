<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Stagiaire::paginate(8);
        // return $data;
        return view('layouts.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'username'=>'required',
            'filiere'=>'required',
        ]);
        $stagiaire = new Stagiaire();
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->Username = $request->username;
        $stagiaire->filiere = $request->filiere;
        $stagiaire->save();
        return redirect('stagiaires')->with(['successful_message' => 'insertion stagiaire successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
        // return $stagiaire;
        return view('layouts.show' , compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        return view('layouts.edit' , compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
        $request->validate([
            'id'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'username'=>'required',
            'filiere'=>'required',
        ]);
        $stagiaire->id=$request->id;
        $stagiaire->nom=$request->nom;
        $stagiaire->prenom=$request->prenom;
        $stagiaire->username=$request->username;
        $stagiaire->filiere=$request->filiere;
        $stagiaire->save();
        return redirect('stagiaires')->with(['successful_message' => 'Stagiaire Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        $stagiaire->delete();
        return redirect('stagiaires')->with(['successful_message' => 'Stagiaire Deleted Successfully']);
    }


    public function deleteAll(Stagiaire $stagiaire)
    {
        //
        $stagiaire= Stagiaire::all();
        $stagiaire->deleteAll();
        return redirect('stagiaires')->with(['successful_message' => 'Stagiaire Deleted Successfully']);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $stagiaire = Stagiaire::where('nom', 'LIKE', '%' . $query . '%')->get();
        return view('layouts.search',['stagiaire' => $stagiaire]);
    }

}
