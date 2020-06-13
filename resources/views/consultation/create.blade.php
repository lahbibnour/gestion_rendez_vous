@extends('layouts.app')
@section('title', 'Nouvelle Consultation')
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
            <div class="card">
            <form action="{{  route('consultation.store') }} " method="post">
            @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label for="date">Date de la Consultation</label>
                        <input type="date" name="date" class="form-control"  value="{{ old('dateRdv')  }}"  id="date" placeholder="">
                        @error('date')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label for="duree">Durée de la Consultation</label>
                        <input type="time" name="duree" class="form-control" value="{{ old('dateRdv')  }}"  id="date" placeholder="" >
                        @error('duree')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="patient_id">Identifiant Patient </label>
                        <input type="number" name="patient_id" class="form-control"  value="{{ old('patient_id') ?? $patient->id}}" id="patient_id"  placeholder="">
                        @error('patient_id')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="medecin_id">Identifiant medecin</label>
                        <input type="number" name="medecin_id" class="form-control" value="{{ old('medecin_id') }}" id="medecin_id"  placeholder="">
                        @error('medecin_id')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="rdv_id">rendez-vous ID</label>
                        <input type="number" name="rdv_id"  class="form-control" value="{{ old('rdv_id') ?? $Rdv-> id }}" id="rdv_id" placeholder="">
                        @error('rdv_id')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="ordannance">Ordonnance</label>
                        <textarea type="text" name="ordannance" value="{{ old('ordannance') }}" id="ordannance" placeholder="" class="form-control textarea"></textarea>
                        @error('ordannance')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="observation">Observation</label>
                        <textarea type="observation" name="observation" value="{{ old('observation') }}" id="observation" placeholder="" class="form-control textarea"></textarea>
                        @error('observation')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                  <div class="update ml-auto mr-auto">
                      
                      <button type="submit" class="btn btn-primary btn-round" style="margin:8px;">Annuler</button>
                      <button type="submit" class="btn btn-primary btn-round" style="margin:8px;">Enregistrer</button>
                    </div>
                    </form>
            </div>
        </div>
       </div>
    </div>
</div>       

@endsection
