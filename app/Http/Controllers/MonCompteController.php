<?php

namespace App\Http\Controllers;

use App\User;
use App\recherchelocataires1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth\AuthComponent;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MonCompteController extends Controller
{

    public function CompteView(){
        return view('MonCompte');
    }


    public function PostInfo(Request $request)
    {
        $id = Auth::id();
        $email = $request->email;
        $rue = $request->rue;
        $codepostal = $request->codepostal;
        $ville = $request->ville;
        $pays = $request->pays;
        $tel = $request->tel;
        $datenaiss = $request->datenaiss;
        $numerotel = $request->numerotel;
        User::where('id',$id)->update(['email'=>$email,'rue'=>$rue,'codepostal'=>$codepostal,'codepostal'=>$codepostal,'ville'=>$ville,'pays'=>$pays,'tel'=>$tel,'datenaiss'=>$datenaiss,'numerotel'=>$numerotel]);
        return view('home');
    }
    //
}
