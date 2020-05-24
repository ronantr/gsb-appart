@extends('layouts.app')

@section('content')

    @php
        /*echo $ID;*/
        $id_user=Auth::user('id')->id;
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h1> Nos appartements : </h1>
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <tr>
                            <th>ID Appartements</th>
                            <th>ID Proprio</th>
                            <th>Rue</th>
                            <th>Ville</th>
                            <th>Pays</th>
                            <th>Code Postal</th>
                            <th>Type</th>
                            <th>Etage</th>
                            <th>Prix location</th>
                            <th>Prix charge</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

            @foreach($ID as $i)
            @if(Auth::user()->role=='admin')
            <tr>
                        <td>{{$i->idappart}}</td>
                        <td>{{$i->user_id}}</td>
                        <td>{{$i->rueappart}}</td>
                        <td>{{$i->villeappart}}</td>
                        <td>{{$i->paysappart}}</td>
                        <td>{{$i->cpappart}}</td>
                        <td>{{$i->typeappart}}</td>
                        <td>{{$i->etgappart}}</td>
                        <td>{{$i->prixlocappart}}</td>
                        <td>{{$i->prixchargeappart}}</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>

            @elseif(  $i->proprietaires_idproprietaires==$id_user )
                <tr>
                    <td>{{$i->idappart}}</td>
                    <td>{{$i->user_id}}</td>
                    <td>{{$i->rueappart}}</td>
                    <td>{{$i->villeappart}}</td>
                    <td>{{$i->paysappart}}</td>
                    <td>{{$i->cpappart}}</td>
                    <td>{{$i->typeappart}}</td>
                    <td>{{$i->etgappart}}</td>
                    <td>{{$i->prixlocappart}}</td>
                    <td>{{$i->prixchargeappart}}</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>                </tr>
            @elseif($i->locataires_idlocataires==$id_user)
                <tr>
                    <td>{{$i->idappart}}</td>
                    <td>{{$i->user_id}}</td>
                    <td>{{$i->rueappart}}</td>
                    <td>{{$i->villeappart}}</td>
                    <td>{{$i->paysappart}}</td>
                    <td>{{$i->cpappart}}</td>
                    <td>{{$i->typeappart}}</td>
                    <td>{{$i->etgappart}}</td>
                    <td>{{$i->prixlocappart}}</td>
                    <td>{{$i->prixchargeappart}}</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>                </tr>
            @endif
            @endforeach


                        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control " type="text" placeholder="Mohsin">
                                        </div>
                                        <div class="form-group">

                                            <input class="form-control " type="text" placeholder="Irshad">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                                        </div>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>



                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
