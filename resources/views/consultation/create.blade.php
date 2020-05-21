@extends('layouts.app')
@section('title', 'ajout consultation')
@include('layouts.navbar')
@section('content')

<div class="container">
    <h1 style="text-align:center">Thème de la Consultation</h1>
        <form action="{{  route('consultation.store') }} " method="post">
        @csrf
    <div class="row">
        <div class="col">
            <label for="exampleFormControlTextarea1">Date de la Consultation</label>
                <input type="date" name="date" class="form-control form-control-lg" id="date" placeholder="">
        </div>
        <div class="col">
            <label for="exampleFormControlTextarea1">Durée de la Consultation</label>
                <input type="time" name="duree" class="form-control form-control-lg" id="duree" placeholder="">
        </div>
    </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nom du Patient</label>
                <input type="text" name="" class="form-control form-control-lg" id=""  placeholder="">
    </div>
    <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenu de la Consultation</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
        <button type="submit" class="btn btn-outline-danger  float-right" style="margin:8px;">Annuler</button>
        <button type="submit" class="btn btn-outline-danger  float-right" style="margin:8px;">Enregistrer</button>

        </form>
</div>
@endsection
