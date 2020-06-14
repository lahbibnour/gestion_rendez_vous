@extends('layouts.app')
@section('title', 'index consultations')
@include('layouts.navbar')
@section('content')

<h1 style="text-align:center">Tous Mes Rendez-vous</h1>
            <form>
            
                <input type="text" value="" class="form-control" onkeyup="myFunction()" id="myInput" placeholder="Search..." autofocus>
                <i class="fa fa-search"></i>
              
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
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
 </script>
  
</table>




</div>
@endsection