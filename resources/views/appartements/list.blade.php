@extends('layouts.app')

@section('content')
    @auth

        <div class="row">
            <div class="col-lg-11">
                @if(Auth::user()->role == 'admin')
                    <h2>Tous les Appartements</h2>
                @endif
                @if(Auth::user()->role == 'Proprietaire')
                    <h2>Mes Appartements</h2>
                @endif
                @if(Auth::user()->role == 'Locataire')
                    <h2>Recherche appartemnts</h2>
                @endif
            </div>
            <div class="col-lg-1">
                @if(Auth::user()->role == 'Proprietaire')
                    <a class="btn btn-success" href="{{ route('appartements.create') }}">Add</a>
                @endif
                @if(Auth::user()->role == 'admin')
                    <a class="btn btn-success" href="{{ route('appartements.create') }}">Add</a>
                @endif
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <section class="search-sec">
            <div class="container">
                <form action="{{ route('appartements.index') }}" method="get" class="form-inline">
                    <div class="form-control">
                        <input type="text" class="form-control" name="s" placeholder="Search users">
                    </div>
                    <div class="form-control">
                        <button class="btn btn-primary" type="submit"> Recehreche by cp</button>
                    </div>
                </form>
            </div>
        </section>
        <table class="table table-bordered">
            <tr>
                <td>ID Appartements</td>
                <td>ID Proprio</td>
                <td>Rue</td>
                <td>Ville</td>
                <td>Pays</td>
                <td>Code Postal</td>
                <td>Type</td>
                <td>Etage</td>
                <td>Prix location</td>
                <td>Prix charge</td>
                <td>Prix total</td>
                <th >Action</th>
            </tr>
            @if(Auth::user()->role == 'Proprietaire')
                @php
                    $id_user=Auth::user('id')->id;
                @endphp
                @foreach ($appartements as $appartement )
                    @if(  $appartement->proprietaires_idproprietaires==$id_user )
                        <tr>
                            <td>{{$appartement->id}}</td>
                            <td>{{$appartement->user_id}}</td>
                            <td>{{$appartement->rueappart}}</td>
                            <td>{{$appartement->villeappart}}</td>
                            <td>{{$appartement->paysappart}}</td>
                            <td>{{$appartement->cpappart}}</td>
                            <td>{{$appartement->typeappart}}</td>
                            <td>{{$appartement->etgappart}}</td>
                            <td>{{$appartement->prixlocappart}}</td>
                            <td>{{$appartement->prixchargeappart}}</td>
                            <td>{{$appartement->prixtotal}}</td>
                            <td>
                                <form action="{{ route('appartements.destroy',$appartement->id)}}" method="POST">
                                    @csrf
                                    <a class="btn btn-info" href="{{ route('appartements.show',$appartement->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('appartements.edit',$appartement->id) }}">Edit</a>
                                </form>
                            </td>
                        </tr>
                    @endif

                @endforeach
            @endif

            @if(Auth::user()->role == 'Locataire')
                @foreach ($appartements as $appartement )
                    <tr>
                        <td>{{$appartement->id}}</td>
                        <td>{{$appartement->user_id}}</td>
                        <td>{{$appartement->rueappart}}</td>
                        <td>{{$appartement->villeappart}}</td>
                        <td>{{$appartement->paysappart}}</td>
                        <td>{{$appartement->cpappart}}</td>
                        <td>{{$appartement->typeappart}}</td>
                        <td>{{$appartement->etgappart}}</td>
                        <td>{{$appartement->prixlocappart}}</td>
                        <td>{{$appartement->prixchargeappart}}</td>
                        <td>{{$appartement->prixtotal}}</td>

                        <td>
                            <form action="{{ route('appartements.destroy',$appartement->id)}}" method="POST">
                                @csrf
                                <a class="btn btn-info" href="{{ route('appartements.show',$appartement->id) }}">Show</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

            @if(Auth::user()->role == 'admin')
                @foreach ($appartements as $appartement )
                    <tr>
                        <td>{{$appartement->id}}</td>
                        <td>{{$appartement->user_id}}</td>
                        <td>{{$appartement->rueappart}}</td>
                        <td>{{$appartement->villeappart}}</td>
                        <td>{{$appartement->paysappart}}</td>
                        <td>{{$appartement->cpappart}}</td>
                        <td>{{$appartement->typeappart}}</td>
                        <td>{{$appartement->etgappart}}</td>
                        <td>{{$appartement->prixlocappart}}</td>
                        <td>{{$appartement->prixchargeappart}}</td>
                        <td>{{$appartement->prixtotal}}</td>

                        <td>
                            <form action="{{ route('appartements.destroy',$appartement->id)}}" method="POST">
                                @csrf
                                <a class="btn btn-info" href="{{ route('appartements.show',$appartement->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('appartements.edit',$appartement->id) }}">Edit</a>
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        <br>
        <br>

    @endauth

@endsection
