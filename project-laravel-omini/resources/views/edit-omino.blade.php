@extends('layouts.main_layout')
@section('section')

<div class="main_create">
  <form action=" {{ route('update', $omino['id']) }} " method="post">

    @csrf
    @method('POST')

    <label for="firstName">NAME</label>
    <input type="text" name="firstName" value=" {{ $omino['firstName']}} ">

    <label for="lastName">LASTNAME</label>
    <input type="text" name="lastName" value=" {{ $omino['lastName']}} ">

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value=" {{ $omino['address']}} ">

    <label for="code">CODE</label>
    <input type="text" name="code" value=" {{ $omino['code']}} ">

    <label for="state">STATE</label>
    <input type="text" name="state" value=" {{ $omino['state']}} ">

    <label for="phoneNumber">PHONENUMBER</label>
    <input type="text" name="phoneNumber" value=" {{ $omino['phoneNumber']}} ">

    <label for="role">ROLE</label>
    <input type="text" name="role" value=" {{ $omino['role']}} ">
    <input type="submit" name="" value="Edit">

  </form>
</div>

@endsection
