@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Laravel 6 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('appartements') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID Appart:</th>
            <td>{{ $appartement->id }}</td>
        </tr>
        <tr>
            <th>ID Locataire:</th>
            <td>{{ $appartement->locataires_idlocataires }}</td>
        </tr>
        <tr>
            <th>user_id:</th>
            <td>{{ $appartement->user_id }}</td>
        </tr>
        <tr>
            <th>rue:</th>
            <td>{{ $appartement->rueappart }}</td>
        </tr>
        <tr>
            <th>ville:</th>
            <td>{{ $appartement->villeappart}}</td>
        </tr>
        <tr>
            <th>Pays:</th>
            <td>{{ $appartement->paysappart }}</td>
        </tr>
        <tr>
            <th>CP appart:</th>
            <td>{{ $appartement->cpappart }}</td>
        </tr>
        <tr>
            <th>Type appart:</th>
            <td>{{ $appartement->typeappart }}</td>
        </tr>
        <tr>
            <th>ETAGE:</th>
            <td>{{ $appartement->etgappart }}</td>
        </tr>
        <tr>
            <th>Prix location:</th>
            <td>{{ $appartement->prixlocappart }}</td>
        </tr>
        <tr>
            <th>Prix charge Appart:</th>
            <td>{{ $appartement->prixchargeappart }}</td>
        </tr>
        <tr>
            <th>Prix total:</th>
            <td>{{ $appartement->prixtotal }}</td>
        </tr>
    </table>
@endsection
