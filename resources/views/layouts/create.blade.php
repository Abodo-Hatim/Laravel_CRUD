@extends('layouts.App')
@section('title' , 'Ajouter Stagiaires')
@section('content')

<form action="{{ route('stagiaires.store')}}" method="post" class="needs-validation" novalidate>
    {{csrf_field()}}
    <div class="row g-3">
        <div class="col-sm-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom" value="" required>
        <div class="invalid-feedback">
            Valid Nom is required.
        </div>
        </div>

        <div class="col-sm-6">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom" placeholder="prenom" value="" required>
        <div class="invalid-feedback">
            Valid Prenom is required.
        </div>
        </div>

        <div class="col-12">
        <label for="username" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        <div class="invalid-feedback">
        Your username is required.
        </div>
        </div>
        </div>

        <div class="col-12">
        <label for="filiere" class="form-label">Filiere</label>
        <input type="text" class="form-control" name="filiere" placeholder="filiere">
        <div class="invalid-feedback">
        Valid Filiere is required.
        </div>
        </div>

        <div class="col-12">
            <input type="submit" value="Ajouter" class="btn btn-success btn-lg w-100">
        </div>
    </div>
</form>

@endsection
