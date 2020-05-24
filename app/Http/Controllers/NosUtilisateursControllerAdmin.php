<?php

namespace App\Http\Controllers;

use App\rechercheutilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NosUtilisateursControllerAdmin extends Controller{
    //
    function rechercheadmin(){
        $IDs = rechercheutilisateurs::all();
        return view('rechercheutilisateurs',['ID'=>$IDs]);
        $this->Auth->user()->role;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function user(){
        return $this->hasmany('user');
    }

}
