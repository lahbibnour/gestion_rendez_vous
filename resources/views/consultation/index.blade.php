@extends('layouts.app')
@section('title', 'index consultations')
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
          <h1 style="text-align:center">Tous Mes Rendez-vous</h1>
      <form>
          <input type="text" value="" class="form-control" onkeyup="myFunction()" id="myInput" placeholder="Search..." autofocus >
            
      </form>
      <table class="table table-hover" id="myTable">
        <thead>
          <tr>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">heure rendez-vous</th>
            <th scope="col">ordonnance</th>
            <th scope="col">observation</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $infos)
            <tr >
              <td>{{ $infos ->nom }}</td>
              <td>{{ $infos ->prenom }}</td>
              <td>{{ $infos ->heure }}</td>
              <td>{{ $infos -> ordannance }}</td>
              <td>{{ $infos -> observation }}</td>
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
          </div>
        
      </div>
      </div>
     
    </div>
  </div>
<!-- END -->
</div>
</div>
@endsection