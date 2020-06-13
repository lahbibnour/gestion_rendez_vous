@extends('layouts.app')
@section('title', 'Contact')
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
    <h1>Contacter la Secretaire</h1>
<form action="/contact" method="POST">
@csrf 
    <div class="form-group">
    <label for="nom">Nom </label>
        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}"  >
        @error('nom')<div class="text-danger">{{ $message }}</div> @enderror
    </div>    
    <div class="form-group">
        <label for="prenom">Prenom </label>
        <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}"  >
        @error('prenom')<div class="text-danger">{{ $message }}</div> @enderror
    </div>
    <div class="form-group">
        <label for="email">email </label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}"  >
        @error('email')<div class="text-danger">{{ $message }}</div> @enderror
    </div>
    <div class="form-group">
        <label for="message">Message</label>
            <textarea cols="30" name="message" class="form-control" rows="7"></textarea>
            @error('message')<div class="text-danger">{{ $message }}</div> @enderror

    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
 </div>
 </div>
 </div>
 </div>   

@endsection