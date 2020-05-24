
@extends('layouts.app')
@section('content')
    @auth
        <head>
            <script>
                function somme(){
                    var nbr1, nbr2, sum;
                    nbr1 = Number(document.getElementById("prixlocappart").value);
                    nbr2 = Number(document.getElementById("prixchargeappart").value);
                    sum = nbr1 + nbr2;
                    document.getElementById("prixtotal").value = sum;
                }
            </script>
        </head>
<div class="row">
        <div class="col-lg-11">
            <h2>Ajoutez votre appartement </h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('appartements') }}"> Back</a>
        </div>
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post"  action="{{ route('appartements.store') }}">
    @csrf

    <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="{{ Auth::user()->id}}">
    <input type="hidden" class="form-control" id="locataires_idlocataires" placeholder="locataires_idlocataires" name="locataires_idlocataires" value=0>
    <input type="hidden" class="form-control" id="proprietaires_idproprietaires" placeholder="proprietaires_idproprietaires " name="proprietaires_idproprietaires" value="{{ Auth::user()->id}}">

    <div class="form-group">
        <label for="rueappart">Addresse :</label>
        <input type="text" class="form-control" id="rueappart" placeholder="Rue" name="rueappart">
    </div>
    <div class="form-group">
        <label for="villeappart">Ville:</label>
        <input type="text" class="form-control" id="villeappart" placeholder="Ville" name="villeappart">
    </div>
    <div class="form-group">
        <label for="cpappart">Code postal:</label>
        <input class="form-control" id="cpappart" name="cpappart" placeholder="cpappart">
    </div>
    <div class="form-group">
        <label for="paysappart">Pays :</label>
        <input type="text" class="form-control" id="paysappart" placeholder="Pays " name="paysappart">
    </div>
    <div class="form-group">
        <label for="typeappart">Type Appart :</label>
        <input class="form-control" id="typeappart" name="typeappart"  placeholder="typeappart">
    </div>
    <div class="form-group">
        <label for="etgappart">Etage :</label>
        <input class="form-control" id="etgappart" name="etgappart" placeholder="etgappart">
    </div>
    <div class="form-group">
        <label for="ascenseurappart">Ascenseur :</label>
        <input class="form-control" id="ascenseurappart" name="ascenseurappart"  placeholder="ascenseurappart">
    </div>
    <div class="form-group">
        <label for="prixlocappart">Prix location :</label>
        <input class="form-control" id="prixlocappart" name="prixlocappart"  placeholder="prixlocappart">
    </div>
    <div class="form-group">
        <label for="prixchargeappart">Prix charge :</label>
        <input class="form-control" id="prixchargeappart" name="prixchargeappart"  placeholder="prixchargeappart">
    </div>
    <div class="form-group">
        <label for="prixtotal">Prix total :</label>
        <input type="button" value="Calculer la somme" onclick="somme()">
        <input class="form-control" id="prixtotal" name="prixtotal"  placeholder="prixtotal">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
    <br>
    <br>
</form>
@endauth

@endsection
