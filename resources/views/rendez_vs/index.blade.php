@extends('layouts.app')
@section('title', 'Rendez-vous')
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
@if(session('AddConsultation'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddConsultation') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(session('AddOrdonnance'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddOrdonnance') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
     <div class="content">
       <div class="row">
         <div class="col-md-12">
            <div class="card demo-icons">
    <h1 style="text-align:center">Liste rendez vous</h1>
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
                                <td>{{ $Rdvs -> dateRdv }}</td>
                                <td>{{ date('H:i', strtotime($Rdvs -> heure)) }}</td>
                                <td>
                                    <a href=" {{ route('rendez_vs.show' , $Rdvs->id ) }} " class="btn btn-outline-dark">Plus De Détails </a>
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
</div>
</div>
</div>

@endsection
