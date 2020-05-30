@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<fieldset>
        <legend>Modifier les coordonnés de votre patient</legend>
        <form action="{{ route('patient.update', $patient->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="nom">Nom </label>
                        <input type="text" name="nom" value="{{ old('nom') ?? $patient->nom }}" id="nom" class="form-control" placeholder="" >
                      
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input type="text" name="prenom" value="{{ old('prenom') ?? $patient->prenom }}" id="prenom" class="form-control" placeholder="" >
                      
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="number" name="age"  value="{{ old('age') ?? $patient->age }}" id="age" class="form-control" placeholder="" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="num_tel">Num telephone</label>
                      <input type="number" name="num_tel"  value="{{ old('num_tel') ?? $patient->num_tel }}" id="num_tel" class="form-control" placeholder="" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="etat">Etat</label>
                      <input type="text" name="etat"  value="{{ old('etat') ?? $patient->etat }}" id="etat" class="form-control" placeholder="" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="age">Sexe</label>
                      <input type="text" name="sexe"  value="{{ old('sexe') ?? $patient->sexe }}" id="sexe" class="form-control" placeholder="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Confirm update</button>
            </div>
        </form>
    </fieldset>
@endsection