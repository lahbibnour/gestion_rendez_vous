@extends('layouts.app')
@section('title', 'Dashboard')
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
            <h1>Test content</h1>
         </div>
       </div>
    </div>     
</div>
@endsection
