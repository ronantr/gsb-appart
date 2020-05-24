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
            <td>{{ $vister->id }}</td>
        </tr>
        <tr>
            <th>ID Locataire:</th>
            <td>{{ $vister->locataires_idlocataires }}</td>
        </tr>
        <tr>
            <th>user_id:</th>
            <td>{{ $vister->user_id }}</td>
        </tr>
        <tr>
        </tr>
    </table>
@endsection
