@extends('main_layout')

@section('content')
  <div class="main_content">
    <h1>Lista Cagnolini</h1>
    <div class="list">
      <ul>
        @foreach ($cagnolini  as $cane)
          <li>
            Nome : <span id="selectDog"><a href=" {{route('stampaCane', $cane['id'])}}"> {{$cane['nome']}}</a></span><br> Razza : {{$cane['razza']}}<br> Altezza : {{$cane['altezza']}}cm <br> Peso : {{$cane['peso']}}kg<br><br>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
