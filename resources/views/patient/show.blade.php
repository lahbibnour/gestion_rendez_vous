@extends('layouts.app')
@include('layouts.navbar')
@section('title', 'Details patient')

@section('content')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Num telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Etat</th>
      <th scope="col">sexe</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$patient->nom}}</td>
      <td>{{$patient->prenom}}</td>
      <td>{{$patient->age}}</td>
      <td>{{ $patient->num_tel }}</td>
      <td>{{ $patient->email}}</td>
      <td>{{ $patient->etat }}</td>
      <td>{{ $patient->sexe }}</td>
      <td><a href="" class="btn btn-outline-info">Prendre un rendez-vous </a>
</td>
    </tr>
    
  </tbody>
</table>
@endsection