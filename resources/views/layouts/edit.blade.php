@extends('layouts.App')
@section('title',"Update Stagiaire $stagiaire->nom" )
@section('content')

<form action="{{ route('stagiaires.update' , $stagiaire->id )}}" method="post" class="needs-validation" novalidate>
    {{csrf_field()}}
    @method('PUT')
    <div class="row g-3">
        <div class="col-sm-6">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" name="id" placeholder="id" value="{{$stagiaire->id}}">
        <div class="invalid-feedback">
        Valid Id is required.
        </div>
        </div>

        <div class="col-sm-6">
        <label for="filiere" class="form-label">Filiere</label>
        <input type="text" class="form-control" name="filiere" placeholder="filiere" value="{{$stagiaire->filiere}}">
        <div class="invalid-feedback">
        Valid Filiere is required.
        </div>
        </div>

        <div class="col-sm-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$stagiaire->nom}}" required>
        <div class="invalid-feedback">
            Valid Nom is required.
        </div>
        </div>

        <div class="col-sm-6">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom" placeholder="prenom"
        value="{{$stagiaire->prenom}}" required>
        <div class="invalid-feedback">
            Valid Prenom is required.
        </div>
        </div>

        <div class="col-12">
        <label for="username" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" name="username" placeholder="Username" required value="{{$stagiaire->username}}">
        <div class="invalid-feedback">
        Your username is required.
        </div>
        </div>
        </div>

        <div class="col-12">
            <input type="submit" value="Modifier Le Stagiaier" class="btn btn-success btn-lg w-100">
        </div>
    </div>
</form>
@endsection
