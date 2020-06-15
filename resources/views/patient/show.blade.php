
@extends('layouts.app')
@include('layouts.navbar')

@section('content')
@if (session('AjouterRdv'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ (session('AjouterRdv')) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('updateRdv'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
{{ (session('updateRdv')) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if (session('deleteRdv'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ (session('deleteRdv')) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col"> Num telephone</th>
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
      <td>{{$patient->email }}</td>
      <td>{{ $patient->etat }}</td>
      <td>{{ $patient->sexe }}</td>
     
      <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Prendre un RDV
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><strong> La prise de rendez-vous</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{ route('rdv.store')}}" method="post" id="modalForm">

      @csrf
       <div class="row">
       <div class="col">
       <div class="form-group">
       <input type="hidden" name="patient_id" value="{{$patient->id}}" >
       <label for="dateRdv">Date de RDV</label> <br>
       <input type="date" name="dateRdv" id="dateRdv" value="{{ old('dateRdv') }}"><br>
       </div>
       </div>
       <div class="col">
       <div class="form-group">
       <label for="heure">Heure de RDV</label><br>
       <input type="time" name="heure" id="heure" value="{{ old('heure') }}">
       
       </div>
       </div>
       </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="event.preventDefault();
            document.querySelector('#modalForm').submit();">Confirmer le RDV </button>
      </div>
    </div>
  </div>
</div>
</td>
    
    </tr>
    
  </tbody>
</table>
<h2>La liste des rendez-vous de patient <strong> {{$patient->prenom}} {{$patient->nom}}</strong> : </h2>
   
<table class="table table-hover">
    <thead>
        <tr>

            <th scope="col">Date</th>
            <th scope="col">heure</th>
            
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rdvs as $rdv)
        <tr>

            <td>{{$rdv->dateRdv}}</td>
            <td>{{$rdv->heure}}</td>
            
            <td>
            <div class="row">
            <a href="{{ route('rdv.edit',$rdv->id) }}" class="btn btn-outline-info">Modifier </a>
            <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Supprimer</a>
            
            </div></td>
            
        </tr>
        @endforeach
    </tbody>
</table>
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          confirmer la supprission ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-rdv-form').submit();">Confirm delete</button>
        </div>
        <form id="delete-rdv-form" action="{{ route('rdv.destroy', $rdv->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection