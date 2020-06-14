@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')
@include('layouts.sideBar')

<h2>La liste consultations de patient <strong> {{$rdvs ->id}} </strong> : </h2>
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
      @foreach ($rdvs as $rdv)
            <td> {{ $consultation -> ordannance }}</td>
            <td> {{ $consultation -> observation }}</td>
      @endforeach
      </tbody>
  
</table>
</div>
@endsection