@extends('layouts.app')
@section('title', 'details rendez-vous')
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">
<div class="sidebar" data-color="white" data-active-color="danger">
<div class="sidebar-wrapper">
@include('layouts.sideBar')
</div>
</div>
<div class="main-panel">
<div class="container-fluid">
@include('layouts.navbar')
</div>
<!-- My test -->
<div class="main-panel" style="height: 100vh;">
     <div class="content">
       <div class="row">
         <div class="col-md-12">
         <div class="card demo-icons">
    <div style="text-align:center ">
      <h3>Plus de détails par rapport ce rendez-vous</h3>
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
        <h3 class="card-title"> {{ $data -> patient -> nom }} {{ $data ->patient -> prenom }}</h3>
        <p class="card-text">
          <h5>Identifiant rendez-vous : {{ $data -> id }}</h5>
          <h5>Identifiant Patient : {{ $data -> patient_id }}</h5>
          <h5>Etat : {{ $data -> patient -> etat }}</h5>
          <h5> date rendez-vous : {{ $data -> dateRdv }}</h5>
          <h5> heure rdv : {{ date('H:i', strtotime($data -> heure)) }}</h5>
        </p>    
        <a href="{{ route('consultation',['patient_id'=> $data -> patient_id, 'rdv_id'=>$data -> id ]) }}" class="btn btn-outline-dark">Consultation</a>
        <a href=" {{ route('consultation.show' , $data-> patient_id ) }} " class="btn btn-outline-dark">Dossier médical </a>
      </div>
    </div>
</div>
</div>
</div>
</div>


@endsection
