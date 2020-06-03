@extends('layouts.app')

@section('title', 'Ajouter Patient')
@include('layouts.navbar')
@section('content')
<<<<<<< HEAD
<fieldset>
    <legend>Nouveau Patient</legend>
    <form action="{{ route('patient.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col">
                <div class="b4-form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" name="nom" value="{{ old('Nom') }}" id="Nom" class="form-control" placeholder="" >
                      
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" value="{{old('Prenom')}}" name="prenom" id="Prenom" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Age">Age</label>
                    <input type="number" value="{{old('Age')}}" min="1" max="20" name="age" id="Age" class="form-control" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="b4-form-group">
                    <label for="Num_tel">Num_tel</label>
                    <input type="number" name="num_tel" value="{{ old('Num_tel') }}" id="Num_tel" class="form-control" placeholder="" >
                      
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Etat">Etat</label>
                    <input type="text" value="{{old('Etat')}}" name="etat" id="Etat" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
            <div class="col">
                <div class="b4-form-group">
                    <label for="Sexe">Sexe</label>
                    <input type="text" value="{{old('Sexe')}}" min="1" max="20" name="sexe" id="Sexe" class="form-control" aria-describedby="helpId">
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn-outline-primary btn-block">Ajouter !  </button>
        </div>
    </form>
</fieldset>
@endsection


=======
   <fieldset>
      <legend>
      <form action="{{ route('patient.store') }}" method="post">
      @csrf
      <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" id="nom" placeholder="Nom">
    @error('nom')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom"  class="form-control" value="{{ old('prenom') }}" id="prenom" placeholder="Prénom">
    @error('prenom')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age"  class="form-control" value="{{ old('age') }}" id="age" min="20" max="80" placeholder="00">
    @error('age')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="num">Num Tel</label>
    <input type="number" name="num_tel"  class="form-control" value="{{ old('num_tel') }}" id="num_tel" placeholder="Num_Tel">
    @error('num_tel')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="num">Email</label>
    <input type="text" name="email"  class="form-control" value="{{ old('email') }}" id="email" placeholder="email">
    @error('email')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="etat">Etat</label>
    <input type="text" name="etat" class="form-control" value="{{ old('etat') }}" id="etat" placeholder="Etat">
    @error('etat')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <input type="text" name="sexe" class="form-control" value="{{ old('sexe') }}" id="sexe" placeholder="Sexe">
    @error('sexe')<div class="text-danger">{{ $message }}</div> @enderror

  </div>
  <button type="submit" type="button" class="btn btn-primary btn-block">Ajouter</button>
      </form>
      </legend>
   </fieldset>
   </div>
   </div>
@endsection   
>>>>>>> 119a7d79895777c93b4d87938783b14544894b79
