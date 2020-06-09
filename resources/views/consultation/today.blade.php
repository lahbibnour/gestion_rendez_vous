@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')


<table class="table table-hover" id="consultation_table">
  <thead>
    <tr>
      <th scope="col">Nom </th>
      <th scope="col">date consultation </th>
      <th scope="col">Ordonnance</th>
      <th scope="col">Observation</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($todayConsultation as $data )
      <td> {{ $data -> patients -> nom }}</td>
      <td> {{ $data -> date }}</td>
      <td> {{ $data -> ordannance }}</td>
      <td> {{ $data -> observation }}</td>
    @endforeach

    </tr>
  
  </tbody>
 
  
</table>




</div>
@endsection