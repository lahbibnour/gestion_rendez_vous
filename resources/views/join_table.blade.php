@extends('layouts.app')

@section('title', 'Liste des rendez_vous')

@include('layouts.navbar')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 style="text-align:center">Liste rendez vous</h1>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID rendez-vs</th>
      <th scope="col">nom patient</th>
      <th scope="col">prenom patient</th>
      <th scope="col">Date Rendez vous</th>
      <th scope="col">Heure du rendez vous</th>
      <th scope="col">Operations</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $Rdvs)
        @if($Rdvs->heure >= now())
            <tr>
                <td>{{ $Rdvs ->id }}</td>  
                <td>{{ $Rdvs ->nom }}</td>
                <td>{{ $Rdvs -> prenom}}</td>
                <td>{{ $Rdvs -> dateRdv}}</td>
                <td>{{ $Rdvs -> heure}}</td>
                <td>
                    <a href="#" class="btn btn-outline-dark">Ordonnace </a>
                    <a href="#" class="btn btn-outline-dark" >Dossier Médical</a>
                    <a href="{{ route('consultation.create') }}" class="btn btn-outline-dark">Consultation</a>

                </td>
            </tr>
        @endif
    @endforeach
  </tbody>
  
</table>
<div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $data -> links() }}
        </div>
</div>

</div>
@endsection
