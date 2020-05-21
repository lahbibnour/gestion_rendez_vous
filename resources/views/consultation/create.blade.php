@extends('layouts.app')
@section('title', 'ajout consultation')
@include('layouts.navbar')
@section('content')

<div class="container">
<h1 style="text-align:center">Thème de la Consultation</h1>
<form>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-warning  float-right">Enregistrer</button>
</form>
</div>
@endsection
