@extends('layouts.app')
@section('title', 'Edit consultation')
@include('layouts.navbar')
@section('content')
@include('layouts.sideBar')


<div class="container">
    <h1 style="text-align:center">Edit de la Consultation</h1>
    <div align="right">
        <a href=" {{ route('consultation.update' , $consultation->id) }}" class="btn btn-outline-info"> Page d'accueil</a>
    </div>
    <br />
        @csrf
        @method('PATCH')
        
    <div class="row">
        <div class="col">
            <label for="date">Date de la Consultation</label>
                <input type="date" name="date" class="form-control form-control-lg" value="{{ old('date') ?? $consultation->date }}" id="date" placeholder="">
                @error('date')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
        
        <div class="col">
            <label for="duree">Durée de la Consultation</label>
                <input type="time" name="duree" class="form-control form-control-lg" value="{{ old('duree') ?? $consultation->duree }}" id="duree" placeholder="">
                @error('duree')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
        </div>
        <div class="row">
        <div class="col">
            <label for="patient_id">Identifiant Patient </label>
                <input type="number" name="patient_id" class="form-control form-control-lg" value="{{ old('patient_id') ?? $consultation->patient_id }}" id="patient_id"  placeholder="">
                @error('patient_id')<div class="text-danger">{{ $message }}</div> @enderror

        </div>
        <div class="col">
            <label for="medecin_id">Identifiant medecin </label>
                <input type="number" name="medecin_id" class="form-control form-control-lg" value="{{ old('medecin_id') ?? $consultation->medecin_id }}" id="patient_id"  placeholder="">
                @error('medecin_id')<div class="text-danger">{{ $message }}</div> @enderror

        </div>
        </div>
        <!-- test 29/05/2020-->
        <div class="col">
            <label for="rdv_id">rendez-vous ID</label>
                <input type="number" name="rdv_id" class="form-control form-control-lg" value="{{ old('rdv_id') ?? $consultation->rdv_id }}" id="rdv_id" placeholder="">
                @error('rdv_id')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="row">

        <div class="col">
            <label for="ordannance">Ordonnance</label>
                <textarea type="text" name="ordannance" class="form-control form-control-lg" value="{{ old('ordannance') ?? $consultation->ordannance }}" id="ordannance" placeholder=""></textarea>
                @error('ordannance')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="col">
            <label for="observation">Observation</label>
                <textarea type="observation" name="observation" class="form-control form-control-lg" value="{{ old('observation') ?? $consultation->observation }}" id="observation" placeholder=""></textarea>
                @error('observation')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
        </div>
        <!--end test-->
            
        <button type="submit" class="btn btn-outline-danger  btn-lg btn-block" style="margin:8px;">confirm</button>
        <button type="submit" class="btn btn-outline-danger  btn-lg btn-block" style="margin:8px;">Annuler</button>
        </form>
</div>
@endsection
