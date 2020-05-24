<?php

namespace App\Http\Controllers;
use App\Appartement;
use App\recherchelocataires1;
use Illuminate\Support\Facades\Auth;
use App\Locataire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NosLocatairesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     *
     */

    public function index()

    {

        $locataires = recherchelocataires1::all();
        return view('locataires.list', compact('locataires', 'locataires'));
        $this->Auth->user()->id;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */

    public function create()

    {

        return view('locataires.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)

    {

        $request->validate([

            'idlocataires' => 'required',
            'users_id' => 'required',
            'numlocataires' => 'required',
            'numerocomptebanquelocataires' => 'required',
            'nombanquelocataires' => 'required',
            'ruebanquelocataires' => 'required',
            'cpvillebanquelocataires' => 'required',
            'telbanquelocataires' => 'required',
            'riblocataires' => 'required',
            'created_at' => 'required',

        ]);

        $locataire = new Appartement([
            'idlocataires' => $request->get('idlocataires'),
            'users_id' => $request->get('users_id'),
            'numlocataires' => $request->get('proprietaires_idproprietaires'),
            'numerocomptebanquelocataires' => $request->get('rueappart'),
            'nombanquelocataires' => $request->get('villeappart'),
            'ruebanquelocataires' => $request->get('cpappart'),
            'cpvillebanquelocataires' => $request->get('paysappart'),
            'telbanquelocataires' => $request->get('etgappart'),
            'riblocataires' => $request->get('typeappart'),
            'created_at' => $request->get('prixlocappart'),

        ]);

        $locataire->save();
        return redirect('locataires')->with('success', 'Appartement has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param Appartement $appartement
     * @return Response
     */

    public function show(Appartement $appartement)

    {
        return view('locataires.view', compact('appartement'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Appartement $appartement
     * @return Response
     */

    public function edit(Appartement $appartement)

    {
        return view('locataires.edit', compact('appartement'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Appartement $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idlocataires)
    {

        $request->validate([
            'idlocataires' => 'required',
            'users_id' => 'required',
            'numlocataires' => 'required',
            'numerocomptebanquelocataires' => 'required',
            'nombanquelocataires' => 'required',
            'ruebanquelocataires' => 'required',
            'cpvillebanquelocataires' => 'required',
            'telbanquelocataires' => 'required',
            'riblocataires' => 'required',
            'created_at' => 'required',
        ]);


        $locataire = Appartement::find($idlocataires);
        $locataire->idlocataires = $request->get('idlocataires');
        $locataire->users_id = $request->get('users_id');
        $locataire->numlocataires = $request->get('numlocataires');
        $locataire->numerocomptebanquelocataires = $request->get('numerocomptebanquelocataires');
        $locataire->nombanquelocataires = $request->get('nombanquelocataires');
        $locataire->ruebanquelocataires = $request->get('ruebanquelocataires');
        $locataire->cpvillebanquelocataires = $request->get('cpvillebanquelocataires');
        $locataire->telbanquelocataires = $request->get('telbanquelocataires');
        $locataire->riblocataires = $request->get('riblocataires');
        $locataire->created_at = $request->get('created_at');


        $locataire->update();

        return redirect('locataires')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param Appartement $appartement
     * @return Response
     * @throws \Exception
     */

    public function destroy(Appartement $appartement)

    {
        //
        $appartement->delete();
        return redirect('locataires')->with('success', 'Student deleted successfully');

    }

}
