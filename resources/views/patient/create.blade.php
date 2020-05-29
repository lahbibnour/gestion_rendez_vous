@extends('layouts.app')

@section('title', 'Nouveau patient')

@section('content')
<div style="margin-left:30%">
<div class="col-md-8 col-md-offset-4">

   <fieldset>
      <legend>
      <form action="{{ route('patient.store') }}" method="post">
      @csrf
      <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom"  class="form-control" id="prenom" placeholder="Prénom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Age</label>
    <input type="number" name="age"  class="form-control" id="age" value="20" min="20" max="80" required>
  </div>
  <div class="form-group">
    <label for="num">Num Tel</label>
    <input type="text" name="num_tel"  class="form-control" id="num" placeholder="Num_Tel" required>
  </div>
  <div class="form-group">
    <label for="etat">Etat</label>
    <input type="text" class="form-control" id="etat" placeholder="Etat" required>
  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <input type="text" name="sexe" class="form-control" id="sexe" placeholder="Sexe" required>
  </div>
  <button type="submit" type="button" class="btn btn-primary btn-block">Ajouter</button>
      </form>
      </legend>
   </fieldset>
   </div>
   </div>
@endsection   
