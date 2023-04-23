@extends('layouts.App')
@section('title' , 'Stagiaires')
@section('content')

    <form action="{{ route('search') }}" method="GET" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
    </form>

    <table class="table table-hover table-responsive">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Username</th>
            <th>Filiere</th>
            <th>Operation</th>
        </tr>
        @foreach ($data as $stagiaire)
            <tr>
                <td>{{$stagiaire->id}}</td>
                <td>{{$stagiaire->nom}}</td>
                <td>{{$stagiaire->prenom}}</td>
                <td>{{$stagiaire->username}}</td>
                <td>{{$stagiaire->filiere}}</td>
                <td>
                    <a href="{{ route('stagiaires.show' , $stagiaire->id) }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i> show</a>

                    <a href="{{ route('stagiaires.edit' , $stagiaire->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i> update</a>

                    <form action="{{ route('stagiaires.destroy' , $stagiaire->id) }}" method="post" class=" d-inline">
                        @csrf
                        @method('DELETE')
                        <span>
                            <button type="submit" value="DELETE" class="btn btn-danger"><i class="bi bi-trash"></i> DELETE</button>
                        </span>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{$data->links()}}
@endsection
