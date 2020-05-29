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
    <h3> ID patient : {{ $data -> patient_id }}</h3>
    <h3> date rendez-vous : {{ $data -> dateRdv }}</h3>
    <h3> heure rdv : {{ $data -> heure }}</h3>
    <a href="{{ route('consultation.create') }}" class="btn btn-outline-dark">Consultation</a>


</div>
@endsection
