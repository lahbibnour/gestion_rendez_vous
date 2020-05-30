@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Ordonnance du consultation</th>
   
     
      
    </tr>
  </thead>
  <tbody>
  @foreach($info as $infos)
       
            <tr>
                
                <td>{{ $infos ->ordannance }}</td>
                
            </tr>
      
    @endforeach
  </tbody>
  
</table>
</div>
@endsection