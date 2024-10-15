<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant ;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $ListeEtudiants = Etudiant::all()->where('utilisateur_id', $user->id);
        // On utilise l'ORM Eloquentpour récupérer toutes les lignes de la table Etudiants
//Chaque lignes de la table est une instance de la classe Etudiant
//Le tableau $ListeEtudiant contient l'ensemble des instances

        $ListeEtudiants = \App\Models\Etudiant::all();

// On passe le tableau à la vue
// La fonction compact PHP est un peu magique : elle créé une association entre un nom et le contenu de la variable associée au nom...

        return view('pages.index', compact('ListeEtudiants')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.creation-etudiant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Creation d'une instance d'étudiant
        $etudiant = new Etudiant() ;

// Accès direct aux propriétés pour les alimenter
// à partir du formulaire
        $etudiant->NomEtudiant = $request->get('nomEtudiantFormulaire') ;
        $etudiant->PrenomEtudiant = $request->get('nomEtudiantFormulaire') ;
        $etudiant->Email = $request->get('nomEtudiantFormulaire') ;
        /*$etudiant->numTelephone = $request->get('telephone');
        $etudiant->datEntree = $request->get('date d entree');
        $etudiant->cv_Path = $cvPath;*/

        // Enregistrement du fichier CV
        $cvPath = $request->file('cv')->store('cvs', 'public');

//A compléter pour le prenom et l'email
// Enregistement dans la base de donnée

        $etudiant->save();
        return redirect()->route('etudiant.index')->with('success', 'Étudiant enregistré avec succès');
//redirection vers le dashboard
      // return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
