@extends('layouts.app')

@section('title', 'Nouveau Patient')
@include('layouts.navbar')
@section('content')
<fieldset>
    <legend>Nouveau Patient</legend>
    <form action="{{ route('patient.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col">
                <div class="b4-form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" name="Nom" value="{{ old('Nom') }}" id="Nom" class="form-control" placeholder="" >
                      
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" value="{{old('Prenom')}}" name="Prenom" id="Prenom" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Age">Age</label>
                    <input type="number" value="{{old('Age')}}" min="1" max="20" name="Age" id="Age" class="form-control" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="b4-form-group">
                    <label for="Num_tel">Num_tel</label>
                    <input type="number" name="Num_tel" value="{{ old('Num_tel') }}" id="Num_tel" class="form-control" placeholder="" >
                      
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Etat">Etat</label>
                    <input type="text" value="{{old('Etat')}}" name="Etat" id="Etat" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Sexe">Sexe</label>
                    <input type="text" value="{{old('Sexe')}}" min="1" max="20" name="Sexe" id="Sexe" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn-outline-primary btn-block">Ajouter !  </button>
        </div>
    </form>
</fieldset>
@endsection