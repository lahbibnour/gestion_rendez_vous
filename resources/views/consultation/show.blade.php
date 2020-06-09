@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')

@if(session('updateConsultation'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateConsultation') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Ordonnance du consultation</th>
      <th scope="col">Observation</th>
      <th scope="col">date consultation</th>
      <th scope="col">Operation</th>
  
      
    </tr>
  </thead>
  <tbody>
 
       
            <td>Ordonnance : {{ $data -> ordannance }}</td>
            <td> {{ $data -> observation }}</td>
            <td> {{ $data -> rdv -> heure }}</td>

            <td>
            <a href="{{ route('consultation.edit' , $data->id) }}"  class="btn btn-outline-danger  float-right" >Edit</a>

            </td>
      
    
  </tbody>
  
</table>
</div>
@endsection