@extends('layouts.app')

@section('title', 'Liste des patients')
@include('layouts.navbar')
@section('content')

@if (session('AjouterPatient'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ (session('AjouterPatient')) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('updatePatient'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('updatePatient')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form>
          <input type="text" value="" class="form-control" onkeyup="myFunction()" id="myInput" placeholder="Search..." autofocus>
            <i class="fa fa-search"></i>
      </form>
<a href="{{ route('patient.create') }}" class="btn btn-secondary btn-lg btn-lg float-right" role="button"
    aria-pressed="true">Ajouter nouveau Patient</a>
<h1>Liste des patients</h1>
<table class="table table-hover" id="myTable">
    <thead>
        <tr>

            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>

            <td>{{$patient->nom}}</td>
            <td>{{$patient->prenom}}</td>
            
            <td>
            <div class="row">
            <a href="{{ route('patient.show',$patient->id) }}" class="btn btn-outline-info">Details </a>
            <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-outline-success">Modifier</a>
            
            </div></td>
            
        </tr>
        @endforeach
    </tbody>
    <script>
          function myFunction() 
          {
            var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) 
                {
                  td = tr[i].getElementsByTagName("td")[0];
                    if (td) 
                    {
                      txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) 
                        {
                            tr[i].style.display = "";
                        } else 
                        {
                            tr[i].style.display = "none";
                        }
                    }     
                }
            }
        </script>
</table>

@endsection
