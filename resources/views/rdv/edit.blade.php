@extends('layouts.app')

@section('title', 'Modifier Rendez-vous')
@include('layouts.navbar')
@section('content')
<fieldset>
        <legend>Modifier les coordonnés de rendez-vous</legend>
        <form action="{{ route('rdv.update',$rdv->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="dateRdv">Date </label>
                        <input type="date" name="dateRdv" value="{{ old('dateRdv') ?? $rdv->dateRdv }}" id="dateRdv" class="form-control" placeholder="" >
                        @error('dateRdv')<div class="text-danger">{{ $message }}</div> @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="heure">Heure</label>
                      <input type="time" name="heure" value="{{ old('heure') ?? $rdv->heure }}" id="heure" class="form-control" placeholder="" >
                      @error('heure')<div class="text-danger">{{ $message }}</div> @enderror

                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Confirm update</button>
            </div>
        </form>
    </fieldset>
@endsection