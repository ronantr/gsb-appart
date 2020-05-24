@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card align-self-sm-center">
                    @if(Auth::user()->role == 'admin')
                        <div class="card-header">Dashboard Admin</div>
                    @endif
                    @if(Auth::user()->role == 'Proprietaire')
                        <div class="card-header">Dashboard Proprietaire</div>
                    @endif
                    @if(Auth::user()->role == 'Locataire')
                        <div class="card-header">Dashboard Locataire</div>
                    @endif
                    <div class="card-body">
                        @if(Auth::user()->role == 'admin')
                            <h5 class="card-title">Bienvenue chez toi !  {{ Auth::user()->name }} Prêts pour une session admin !</h5>
                        @endif
                        @if(Auth::user()->role == 'Proprietaire')
                            <h5 class="card-title">Bienvenue chez nous ! {{ Auth::user()->name }} </h5>
                        @endif
                        @if(Auth::user()->role == 'Locataire')
                            <h5 class="card-title">Bienvenue chez nous ! {{ Auth::user()->name }} </h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @if(Auth::user()->role == 'admin')
        <div class="row justify-content-center">
            <div class="card align-self-sm-center">
                <br>
                <div class="card-columns mb-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nos Utilisateurs</h4>
                            <p class="card-text"> Tu retrouveras ici tous les utilisateurs actuelles et tu pourras leurs set un role modifier leur mot de passe ect ect</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/nosutilisateurs" class="btn btn-success align-content-center">Y accéder!</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-columns mb-3">
                    <div class="card ">
                        <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nos Appartements</h4>
                            <p class="card-text"> Tu retrouveras ici tous les utilisateurs actuelles et tu pourras leurs set un role modifier leur mot de passe ect ect</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="appartementss" class="btn btn-success align-content-center">Y accéder!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(Auth::user()->role == 'Proprietaire')
        <div class="row justify-content-center">
            <div class="card align-self-sm-center">
                <div class="card-columns mb-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Mon Compte</h4>
                            <p class="card-text">voir votre compte</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="MonCompte" class="btn btn-success align-content-center">voir votre compte</a>
                        </div>
                    </div>
                </div>
            </div>
                <!--/card-columns-->
            <div class="card align-self-sm-center">
                <div class="card-columns mb-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Mes appartements</h4>
                            <p class="card-text">voir mes appartements</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="appartements" class="btn btn-success align-content-center">voir mes appartements</a>
                        </div>
                    </div>
                    <!--/card-columns-->
                </div>
            </div>
        </div>

            @endif
            @if(Auth::user()->role == 'Locataire')
                <div class="row justify-content-center">
                    <div class="card align-self-sm-center">
                        <div class="card-columns mb-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Mon Compte</h4>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="MonCompte" class="btn btn-success align-content-center">voir votre compte</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-columns mb-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Devenir Proprietaire :</h4>
                                    <p class="card-text"> Vous voulez proposer votre appartements a la location chez GSB-Appart</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" class="btn btn-success align-content-center">Cliquez ICI !</a>
                                </div>
                            </div>
                        </div>
                            <div class="card">
                                <img class="card-img-top img-fluid" src="//placehold.it/600x200/444/fff?text=..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">votre location</h4>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="MonCompte class="btn btn-success align-content-center">voir votre location</a>
                                </div>
                            </div>
                            <!--/card-columns-->
                        </div>
                </div>
                    @endif
                </div>
@endsection
