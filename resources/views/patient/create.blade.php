@extends('layouts.app')

@section('title', 'Ajouter Patient')
@include('layouts.navbar')
@section('content')
   <fieldset>
      <legend>
      <form action="{{ route('patient.store') }}" method="post">
      @csrf
      <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" id="nom" placeholder="Nom">
    @error('nom')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom"  class="form-control" value="{{ old('prenom') }}" id="prenom" placeholder="Prénom">
    @error('prenom')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age"  class="form-control" value="{{ old('age') }}" id="age" min="20" max="80" placeholder="00">
    @error('age')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="num">Num Tel</label>
    <input type="number" name="num_tel"  class="form-control" value="{{ old('num_tel') }}" id="num_tel" placeholder="Num_Tel">
    @error('num_tel')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="num">Email</label>
    <input type="text" name="email"  class="form-control" value="{{ old('email') }}" id="email" placeholder="email">
    @error('email')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="etat">Etat</label>
    <input type="text" name="etat" class="form-control" value="{{ old('etat') }}" id="etat" placeholder="Etat">
    @error('etat')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <input type="text" name="sexe" class="form-control" value="{{ old('sexe') }}" id="sexe" placeholder="Sexe">
    @error('sexe')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <button type="submit" type="button" class="btn btn-primary btn-block">Ajouter</button>
      </form>
      </legend>
   </fieldset>
   </div>
   </div>
@endsection   
