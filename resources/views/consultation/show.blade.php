@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Ordonnance du consultation</th>
      <th scope="col">Observation</th>
      <th scope="col">date consultation</th>

   
     
      
    </tr>
  </thead>
  <tbody>
 
       
            <td>Ordonnance : {{ $data -> ordannance }}</td>
            <td> {{ $data -> observation }}</td>
            <td>{{  $data ->date }}</td>
      
    
  </tbody>
  
</table>
</div>
@endsection