
@extends('layouts.app')
@section('content')
    @auth
        <div class="row">
            <div class="col-lg-11">
                <h2>Ajoutez votre vister </h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary" href="{{ url('visters') }}"> Back</a>
            </div>
        </div>

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
        <form method="post"  action="{{ route('visters.store') }}">
            @csrf

            <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="{{ Auth::user()->id}}">
            <input type="text" class="form-control" id="appartement_idappart"  placeholder="appartement_idappart" name="appartement_idappart">
            <input type="date" class="form-control"id="datevisitevisiter" name="datevisitevisiter">

                <button type="submit" class="btn btn-default">Submit</button>

            <br>
            <br>
        </form>
    @endauth

@endsection
