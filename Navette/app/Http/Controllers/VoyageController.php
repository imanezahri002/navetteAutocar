<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages=Voyage::all();
        return view ('ListeVoyage',compact('voyages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addVoyage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoyageRequest $request)
    {
        Voyage::create([

            'place'=>$request->place,
            'ville_depart'=>$request->ville_depart,
            'ville_arrivee'=>$request->ville_arrivee,
            'heure_depart'=>$request->heure_depart,
            'heure_arrivee'=>$request->heure_arrivee,
            'date_depart'=>$request->date_depart,
            'date_arrivee'=>$request->date_arrivee,
            'prix'=>$request->prix,


        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Voyage $voyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voyage $voyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoyageRequest $request, Voyage $voyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voyage $voyage)
    {
        //
    }
}
