@extends('layouts.app')

@section('title', 'Liste des rendez_vous')

@include('layouts.navbar')


@section('content')
 
<div class="container">

<h1>Liste rendez vous</h1>

<!--@foreach($Rdv as $Rdvs)
<div>
    {{ $Rdvs ->patient_id }} - {{ $Rdvs -> dateRdv}}
</div>
@endforeach-->

<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Num de patient</th>
      <th scope="col">Date de la visite</th>
      <th scope="col">Heure du visite</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($Rdv as $Rdvs)
    <tr>
     
      <td>{{ $Rdvs ->patient_id }}</td>
      <td>{{ $Rdvs -> dateRdv}}</td>
      <td>{{ $Rdvs -> heure}}</td>

      <td>
            <a href="#" class="btn btn-outline-info">Ordonnace </a>
            <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Dossier Médical</a>
            
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection
