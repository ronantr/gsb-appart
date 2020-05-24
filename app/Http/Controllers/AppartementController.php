<?php

namespace App\Http\Controllers;

use App\Appartement;
use App\rechercheapp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use eloquentFilter\QueryFilter\ModelFilters\ModelFilters;
use Illuminate\Support\Facades\DB;


class AppartementController extends Controller{

    /**
     * Display a listing of the resource.
     *

     * @return Response
     *
     */

    public function index(Request $request)

    {
        $s = $request->input('s');

        $appartements = Appartement::all();
        return view('appartements.list', compact('appartements','appartements' ,'s'));
        $this->Auth->user()->id;
    }


    /**
     * Show the form for creating a new resource.
     *

     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */

    public function create()

    {

        return view('appartements.create');

    }



    /**
     * Store a newly created resource in storage.
     *

     * @param  Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)

    {

        $request->validate([

            'rueappart' => 'required',
            'villeappart' => 'required',
            'cpappart' => 'required',
            'paysappart' => 'required',
            'etgappart' => 'required',
            'typeappart' => 'required',
            'prixlocappart' => 'required',
            'prixchargeappart' => 'required',
            'prixtotal' => 'required',
            'ascenseurappart' => 'required',

        ]);

        $appartement = new Appartement([
            'user_id' => $request->get('user_id'),
            'locataires_idlocataires' => $request->get('locataires_idlocataires'),
            'proprietaires_idproprietaires' => $request->get('proprietaires_idproprietaires'),
            'rueappart' => $request->get('rueappart'),
            'villeappart'=> $request->get('villeappart'),
            'cpappart'=> $request->get('cpappart'),
            'paysappart'=> $request->get('paysappart'),
            'etgappart'=> $request->get('etgappart'),
            'typeappart'=> $request->get('typeappart'),
            'prixlocappart'=> $request->get('prixlocappart'),
            'prixtotal'=> $request->get('prixtotal'),
            'prixchargeappart'=> $request->get('prixchargeappart'),
            'ascenseurappart'=> $request->get('ascenseurappart'),

        ]);

        $appartement->save();
        return redirect('appartements')->with('success', 'Appartement has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param Appartement $appartement
     * @return Response
     */

    public function show(Appartement $appartement)

    {
        return view('appartements.view',compact('appartement'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  Appartement  $appartement
     * @return Response
     */

    public function edit(Appartement $appartement)

    {
        return view('appartements.edit',compact('appartement'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'rueappart' => 'required',
            'villeappart' => 'required',
            'cpappart' => 'required',
            'paysappart' => 'required',
            'typeappart' => 'required',
            'etgappart' => 'required',
            'prixlocappart' => 'required',
            'prixtotal' => 'required',
            'prixchargeappart' => 'required',
            'ascenseurappart' => 'required',
        ]);


        $appartement = Appartement::find($id);
        $appartement->id = $request->get('id');
        $appartement->user_id = $request->get('user_id');
        $appartement->rueappart = $request->get('rueappart');
        $appartement->villeappart = $request->get('villeappart');
        $appartement->cpappart = $request->get('cpappart');
        $appartement->paysappart = $request->get('paysappart');
        $appartement->typeappart = $request->get('typeappart');
        $appartement->etgappart = $request->get('etgappart');
        $appartement->prixlocappart = $request->get('prixlocappart');
        $appartement->prixtotal = $request->get('prixtotal');
        $appartement->prixchargeappart = $request->get('prixchargeappart');
        $appartement->ascenseurappart = $request->get('ascenseurappart');


        $appartement->update();

        return redirect('appartements')->with('success', 'Student updated successfully');
    }

    /**

     * Remove the specified resource from storage.
     * @param  Appartement  $appartement
     * @return Response

     */

    public function destroy(Appartement $appartement)

    {
        //
        $appartement->delete();
        return redirect('appartements')->with('success', 'Student deleted successfully');

    }


}
