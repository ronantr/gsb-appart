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
            <h2>Edit appart</h2>
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
<form method="post" action="{{ route('appartements.update',$locataire->idlocataires) }}" >
    @method('PATCH')
    @csrf
    <input type="hidden" class="form-control" id="id"  placeholder="id" name="id" value="{{ $appartement->id }}">
    <input type="hidden" class="form-control" id="user_id"  placeholder="user_id" name="user_id" value="{{ $appartement->user_id }}">
    <div class="form-group">
        <label for="rueappart">Addresse :</label>
        <input type="text" class="form-control" id="rueappart" placeholder="Rue" name="rueappart" value="{{ $appartement->rueappart }}">
    </div>
    <div class="form-group">
        <label for="villeappart">Ville:</label>
        <input type="text" class="form-control" id="villeappart" placeholder="Ville" name="villeappart" value="{{ $appartement->villeappart }}">
    </div>
    <div class="form-group">
        <label for="cpappart">Code postal:</label>
        <input type="text" class="form-control" id="cpappart"  placeholder="cpappart"name="cpappart"  value="{{ $appartement->cpappart }}">
    </div>
    <div class="form-group">
        <label for="paysappart">Pays :</label>
        <input type="text" class="form-control" id="paysappart" placeholder="Pays " name="paysappart" value="{{ $appartement->paysappart }}">
    </div>

    <div class="form-group">
        <label for="typeappart">Type :</label>
        <input type="text" class="form-control" id="typeappart"  placeholder="typeappart" name="typeappart" value="{{ $appartement->typeappart }}">
    </div>
    <div class="form-group">
        <label for="etgappart">Etage :</label>
        <input type="text" class="form-control" id="etgappart"  placeholder="etgappart" name="etgappart"value="{{ $appartement->etgappart }}">
    </div>
    <div class="form-group">
        <label for="ascenseurappart">Ascenseur :</label>
        <input type="text"  class="form-control" id="ascenseurappart"   placeholder="ascenseurappart" name="ascenseurappart"value="{{ $appartement->ascenseurappart }}">
    </div>
    <div class="form-group">
        <label for="prixlocappart">Prix location :</label>
        <input type="text" class="form-control" id="prixlocappart"   placeholder="prixlocappart" name="prixlocappart" value=" {{ $appartement->prixlocappart }}">
    </div>
    <div class="form-group">
        <label for="prixchargeappart">Prix charge :</label>
        <input type="text" class="form-control" id="prixchargeappart"  placeholder="prixchargeappart" name="prixchargeappart" value="{{ $appartement->prixchargeappart }}">
    </div>
    <div class="form-group">
        <label for="prixtotal">Prix total :</label>
        <input type="button" value="Calculer la somme" onclick="somme()">
        <input class="form-control" id="prixtotal" name="prixtotal"  placeholder="prixtotal" >
    </div>
    <div class="form-group">

    <button type="submit" class="btn btn-info">Submit</button>
    </div>
<br>
    <br>
</form>
@endauth

@endsection
