@extends('layouts.app')

@section('title', 'Liste des patients')

@section('content')
<a href="{{ route('patient.create') }}" class="btn btn-secondary btn-lg btn-lg float-right" role="button"
    aria-pressed="true">Ajouter nouveau Patient</a>
<h1>Liste des patients</h1>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">age</th>
      <th scope="col">Num_tel</th>
      <th scope="col">Etat</th>
      <th scope="col">Sexe</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($patients as $patient)
    <tr>
     
      <td>{{$patient->nom}}</td>
      <td>{{$patient->prenom}}</td>
      <td>{{$patient->age}}</td>
      <td>{{$patient->num_tel}}</td>
      <td>{{$patient->etat}}</td>
      <td>{{$patient->sexe}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection