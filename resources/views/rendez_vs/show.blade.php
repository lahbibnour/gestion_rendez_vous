@extends('layouts.app')

@section('title', 'détails Patient')

@include('layouts.navbar')

@section('content')
<div class="container">

<div style="text-align:center ">
<h1>Plus de détails par rapport ce rendez-vous</h1>
    <div align="right">
        <a href=" {{ route('rendez_vs.index') }}" class="btn btn-outline-info"> Page d'accueil</a>
    </div>
    <br />
</div>
     
    <div class="card text-center">
  <div class="card-header">
    Détails Rendez-vous Patient
  </div>
  <div class="card-body">
    <h3 class="card-title"> {{ $data -> Patient -> nom }} {{ $data ->Patient -> prenom }}</h3>
    <p class="card-text">
    
    <h5>Identifiant rendez-vous : {{ $data -> id }}</h5>
    <h5>Identifiant Patient : {{ $data -> patient_id }}</h5>
    <h5>Etat : {{ $data -> patient -> etat }}</h5>
    <h5> date rendez-vous : {{ $data -> dateRdv }}</h5>
    <h5> heure rdv : {{ date('H:i', strtotime($data -> heure)) }}</h5>
    </p>    
    <a href="{{ route('consultation',['patient_id'=> $data -> patient_id, 'rdv_id'=>$data -> id ]) }}" class="btn btn-outline-dark">Consultation</a>
    <a href=" {{ route('consultation.show' , $data->id ) }} " class="btn btn-outline-dark">Dossier médical </a>

  </div>
  
</div>


</div>
@endsection
