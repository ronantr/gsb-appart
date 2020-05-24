<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appartement;
use App\rechercheapp;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\vister;


class visters extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     *
     */

    public function index()

    {

        $vister = vister::all();
        return view('visters.list', compact('vister', 'vister'));
        $this->Auth->user()->id;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */

    public function create()

    {

        return view('visters.create');

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

            'users_id' => 'required',
            'appartement_idappart'=>'required',
            'datevisitevisiter'=>'required',

        ]);

        $visiter = new visiter([
            'users_id' => $request->get('users_id'),
            'appartement_idappart' => $request->get('appartement_idappart'),
            'datevisitevisiter' => $request->get('datevisitevisiter'),

        ]);

        $visiter->save();
        return redirect('visters')->with('success', 'visiter has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param visiter $visiter
     * @return Response
     */

    public function show(visiter $visiter)

    {
        return view('visiters.view', compact('visiter'));
    }



    /**
     * Remove the specified resource from storage.
     * @param visiter $visiter
     * @return Response
     * @throws \Exception
     */

    public function destroy(visiter $visiter)

    {
        //
        $visiter->delete();
        return redirect('visters')->with('success', 'visiter deleted successfully');

    }
}
