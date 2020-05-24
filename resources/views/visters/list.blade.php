@extends('layouts.app')

@section('content')
    @auth

        <div class="row">
            <div class="col-lg-11">
                @if(Auth::user()->role == 'admin')
                    <h2>Tous les vistes</h2>
                @endif
                @if(Auth::user()->role == 'Proprietaire')
                    <h2>Mes vistes</h2>
                @endif
                @if(Auth::user()->role == 'Locataire')
                    <h2>Mes vistes</h2>
                @endif
            </div>
            <div class="col-lg-1">
                @if(Auth::user()->role == 'Proprietaire')
                    <a class="btn btn-success" href="{{ route('visters.create') }}">Add</a>
                @endif
                @if(Auth::user()->role == 'admin')
                    <a class="btn btn-success" href="{{ route('visters.create') }}">Add</a>
                @endif
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <td>ID Appartements</td>
                <td>user id</td>
                <td>Date</td>
            </tr>
            @if(Auth::user()->role == 'Proprietaire')
                @php
                    $id_user=Auth::user('id')->id;
                @endphp
                @foreach ($vister as $viste )
                    @if(  $vister->proprietaires_idproprietaires==$id_user )
                        <tr>
                            <td>{{$viste->appartement_idappart}}</td>
                            <td>{{$viste->user_id}}</td>
                            <td>{{$viste->datevisitevisiter}}</td>

                            <td>
                                <form action="{{ route('appartements.destroy',$viste->appartement_idappart)}}" method="POST">
                                    @csrf
                                    <a class="btn btn-info" href="{{ route('appartements.show',$viste->appartement_idappart) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('appartements.edit',$viste->appartement_idappart) }}">Edit</a>
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif

                @endforeach
            @endif

            @if(Auth::user()->role == 'Locataire')
                @foreach ($vister as $viste )
                    <tr>
                        <td>{{$viste->appartement_idappart}}</td>
                        <td>{{$viste->user_id}}</td>
                        <td>{{$viste->datevisitevisiter}}</td>

                        <td>
                            <form action="{{ route('appartements.destroy',$viste->id)}}" method="POST">
                                @csrf
                                <a class="btn btn-info" href="{{ route('appartements.show',$viste->appartement_idappart) }}">Show</a>
                                <a class="btn btn-info" href="{{ route('appartements.vistier',$viste->appartement_idappart) }}">visiter</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

            @if(Auth::user()->role == 'admin')
                @foreach ($vister as $viste )
                    <tr>
                        <td>{{$viste->appartement_idappart}}</td>
                        <td>{{$viste->user_id}}</td>>
                        <td>{{$viste->datevisitevisiter}}</td>
                        <td>
                            <form action="{{ route('appartements.destroy',$viste->appartement_idappart)}}" method="POST">
                                @csrf
                                <a class="btn btn-info" href="{{ route('appartements.show',$viste->appartement_idappart) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('appartements.edit',$viste->appartement_idappart) }}">Edit</a>
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
