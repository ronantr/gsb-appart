@extends('layouts.app')
@section('content')
    @auth
        <div class="container">
        <div class="row my-2">
            <div class="col-lg-4 order-lg-1 text-center">
                <h6 class="mt-2"></h6>
            </div>
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">A propos de moi</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h2 class="mb-1 text-center">{{ Auth::user()->name }}</h2>
                    <div class="tab-pane" id="edit">
                        <form method="POST" action="MonCompte">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail"  name="email" required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input id="rue" type="text" class="form-control @error('rue') is-invalid @enderror" name="rue" value="{{ old('rue') }}" required autocomplete="rue" placeholder="Votre Adresse"  autofocus>
                                    @error('rue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" placeholder="ville" required>
                                    @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <input id="codepostal" type="text" class="form-control @error('codepostal') is-invalid @enderror" name="codepostal" placeholder="Code Postal" required>
                                    @error('codepostal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" placeholder="Pays"required>
                                @error('pays')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Telephone Fixe</label>
                                <div class="col-lg-9">
                                    <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" placeholder="Telephone Fixe"  name="tel">
                                    @error('rue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Telephone Portable</label>
                                <div class="col-lg-9">
                                    <input id="numerotel" type="text" class="form-control @error('numerotel') is-invalid @enderror" name="numerotel" placeholder="Telephone Portable" required>
                                    @error('numerotel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Date de naissance</label>
                                <div class="col-lg-9">
                                    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" min="1940-01-01" max="2002-12-31" required>
                                    @error('datenaiss')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Modifier') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth

@endsection
