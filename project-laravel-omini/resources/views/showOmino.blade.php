 @extends('layouts.main_layout')

 @section('section')
   <div class="singleOmino">
     <ul>
       <li> ID: {{$omino['id']}} </li>
       <li> FIRSTNAME: {{$omino['firstName'] }} </li>
       <li> LASTNAME: {{$omino['lastName'] }} </li>
       <li> ADDRESS: {{$omino['address'] }} </li>
       <li> CODE: {{$omino['code'] }} </li>
       <li> STATE: {{$omino['state'] }} </li>
       <li> PHONENUMBER: {{$omino['phoneNumber'] }} </li>
       <li> ROLE: {{$omino['role'] }} </li>
     </ul>
     <h1>
       <a href="{{ route('delete', $omino['id']) }}">Delete Me!</a>
     </h1>
     <h1>
       <a href="{{ route('edit', $omino['id']) }}">Edit</a>
     </h1>
   </div>
 @endsection
