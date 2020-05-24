@extends('layouts.app')

@section('content')
    @auth

        <div class="row">
        <div class="col-lg-11">
            @if(Auth::user()->role == 'admin')
                 <h2>Tous les locatairess</h2>
            @endif
                @if(Auth::user()->role == 'Proprietaire')
                    <h2>Mes Locataires</h2>
                @endif
                @if(Auth::user()->role == 'Locataire')
                    <h2>Appartements loué</h2>
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
            <td>ID Locataires</td>
            <td>ID Proprio</td>
            <td>Num Locataires</td>
            <td>Numero compte en banque</td>
            <td>Nom Banque</td>
            <td>Addresse Banque</td>
            <td>Cp banque</td>
            <td>Tel Banque</td>
            <td>Rib Banque</td>
            <td>Created At</td>
            <th >Action</th>
        </tr>
      @if(Auth::user()->role == 'Proprietaire')
            @php
                $id_user=Auth::user('id')->id;
            @endphp
        @foreach ($locataires as $locataire )
                @if(  $locataire->proprietaires_idproprietaires==$id_user )
            <tr>
                <td>{{$locataire->idlocataires}}</td>
                <td>{{$locataire->users_id}}</td>
                <td>{{$locataire->numlocataires}}</td>
                <td>{{$locataire->numerocomptebanquelocataires}}</td>
                <td>{{$locataire->nombanquelocataires}}</td>
                <td>{{$locataire->ruebanquelocataires}}</td>
                <td>{{$locataire->cpvillebanquelocataires}}</td>
                <td>{{$locataire->telbanquelocataires}}</td>
                <td>{{$locataire->riblocataires}}</td>
                <td>{{$locataire->created_at}}</td>
                <td>
                    <form action="{{ route('locataires.destroy',$locataire->idlocataires)}}" method="POST">
                       @csrf
                       <a class="btn btn-info" href="{{ route('locataires.show',$locataire->idlocataires) }}">Show</a>
                      <a class="btn btn-primary" href="{{ route('locataires.edit',$locataire->idlocataires) }}">Edit</a>
                   </form>
                </td>
            </tr>
                @endif

            @endforeach
      @endif

        @if(Auth::user()->role == 'Locataire')
          @foreach ($locataires as $locataire )
            <tr>
                <td>{{$locataire->idlocataires}}</td>
                <td>{{$locataire->users_id}}</td>
                <td>{{$locataire->numlocataires}}</td>
                <td>{{$locataire->numerocomptebanquelocataires}}</td>
                <td>{{$locataire->nombanquelocataires}}</td>
                <td>{{$locataire->ruebanquelocataires}}</td>
                <td>{{$locataire->cpvillebanquelocataires}}</td>
                <td>{{$locataire->telbanquelocataires}}</td>
                <td>{{$locataire->riblocataires}}</td>
                <td>{{$locataire->created_at}}</td>

                <td>
                    <form action="{{ route('locataires.destroy',$locataire->idlocataires)}}" method="POST">
                        @csrf
                        <a class="btn btn-info" href="{{ route('locataires.show',$locataire->idlocataires) }}">Show</a>
                    </form>
                </td>
            </tr>
        @endforeach
        @endif

        @if(Auth::user()->role == 'admin')
            @foreach ($locataires as $locataire )
                <tr>
                    <td>{{$locataire->idlocataires}}</td>
                    <td>{{$locataire->users_id}}</td>
                    <td>{{$locataire->numlocataires}}</td>
                    <td>{{$locataire->numerocomptebanquelocataires}}</td>
                    <td>{{$locataire->nombanquelocataires}}</td>
                    <td>{{$locataire->ruebanquelocataires}}</td>
                    <td>{{$locataire->cpvillebanquelocataires}}</td>
                    <td>{{$locataire->telbanquelocataires}}</td>
                    <td>{{$locataire->riblocataires}}</td>
                    <td>{{$locataire->created_at}}</td>
                    <td>
                       <form action="{{ route('locataires.destroy',$locataire->users_id)}}" method="POST">
                          @csrf
                           <a class="btn btn-info" href="{{ route('locataires.show',$locataire->users_id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('locataires.edit',$locataire->users_id) }}">Edit</a>
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
