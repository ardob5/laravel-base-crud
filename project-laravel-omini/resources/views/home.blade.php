@extends('layouts.main_layout')

@section('section')
  <div class="main_content">
    <table>
      <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>ADDRESS</th>
        <th>CODE</th>
        <th>STATE</th>
        <th>PHONENUMBER</th>
        <th>ROLE</th>
      </tr>
      @foreach ($omini as $omino)
        <tr>
          <td> <b><a href="{{ route('show', $omino['id']) }}"> {{ $omino['firstName'] }} </a></b></td>
          <td> {{ $omino['lastName'] }} </td>
          <td> {{ $omino['address'] }} </td>
          <td> {{ $omino['code'] }} </td>
          <td> {{ $omino['state'] }} </td>
          <td> {{ $omino['phoneNumber']}}</td>
          <td> {{ $omino['role'] }} </td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
