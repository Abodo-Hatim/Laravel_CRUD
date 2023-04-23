@extends('layouts.App')
@section('title' , 'Details Stagiaire')
@section('content')
    <div class="card text-bg-info mb-3" style="max-width: 18rem;">
    <div class="card-header h3">Id De Stagiaire : #{{$stagiaire->id}}</div>
    <div class="card-body">
        <h5 class="card-title">{{$stagiaire->nom}} {{$stagiaire->prenom}}</h5>
        <p class="card-text">{{$stagiaire->filiere}}</p>
    </div>
    </div>
@endsection
