@extends('layouts.app')

@section('title', 'Liste des patients')
@include('layouts.navbar')
@section('content')

@if (session('AjouterPatient'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ (session('AjouterPatient')) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('updatePatient'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('updatePatient')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ route('patient.create') }}" class="btn btn-secondary btn-lg btn-lg float-right" role="button"
    aria-pressed="true">Ajouter nouveau Patient</a>
<h1>Liste des patients</h1>
<table class="table table-hover">
    <thead>
        <tr>

            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>

            <td>{{$patient->nom}}</td>
            <td>{{$patient->prenom}}</td>
            
            <td>
            <div class="row">
            <a href="{{ route('patient.show',$patient->id) }}" class="btn btn-outline-danger">Details </a>
            <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-outline-success">Modifier</a>
            
            </div></td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
