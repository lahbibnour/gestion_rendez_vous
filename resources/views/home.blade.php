@extends('layouts.app')
@include('layouts.navbar')
@section('title', 'Accueil')

@section('content')

<style>
.img{
    border-radius: 50%;
    padding-left:80%;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="text-center">
                <h1>Bienvenue</h1>
                <img src="image/bg1.jpg" width="1050 px" height="200 px" alt="" class="img" border-radius="50 px" >

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
    </div>
</div>
@endsection
