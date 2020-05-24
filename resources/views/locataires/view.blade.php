@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Laravel 6 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('locataires') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID Appart:</th>
            <td>{{$locataire->idlocataires}}</td>
        <tr>
            <th>ID Locataire:</th>
            <td>{{$locataire->users_id}}</td>
        </tr>
        <tr>
            <th>user_id:</th>
            <td>{{$locataire->numlocataires}}</td>
        </tr>
        <tr>
            <th>rue:</th>
            <td>{{$locataire->numerocomptebanquelocataires}}</td>
        </tr>
        <tr>
            <th>ville:</th>
            <td>{{$locataire->nombanquelocataires}}</td>
        </tr>
        <tr>
            <th>Pays:</th>
            <td>{{$locataire->ruebanquelocataires}}</td>
        </tr>
        <tr>
            <th>CP appart:</th>
            <td>{{$locataire->cpvillebanquelocataires}}</td>
        </tr>
        <tr>
            <th>Type appart:</th>
            <td>{{$locataire->telbanquelocataires}}</td>
        </tr>
        <tr>
            <th>ETAGE:</th>
            <td>{{$locataire->riblocataires}}</td>
        </tr>
        <tr>
            <th>Prix location:</th>
            <td>{{$locataire->created_at}}</td>
        </tr>
    </table>
@endsection
