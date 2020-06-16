@extends ('main_layout')

 @section('content')
   <div class="container">
     <h2> <a href="{{route('home')}}">Clicca QUI per tornare alla lista dei cani</a> </h2>
     <div class="myDog">
       Nome : {{$cane['nome']}} <br> Razza : {{$cane['razza']}} <br> Altezza : {{$cane['altezza']}}cm  <br> Peso : {{$cane['peso']}}kg
     </div>
   </div>
@endsection
