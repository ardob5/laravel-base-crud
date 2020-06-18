@extends('layouts.main_layout')
@section('section')

<div class="main_create">
  <form action=" {{ route('store') }} " method="post">
    
    @csrf
    @method('POST')

    <label for="firstName">NAME</label>
    <input type="text" name="firstName" value="">

    <label for="lastName">LASTNAME</label>
    <input type="text" name="lastName" value="">

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value="">

    <label for="code">CODE</label>
    <input type="text" name="code" value="">

    <label for="state">STATE</label>
    <input type="text" name="state" value="">

    <label for="phoneNumber">PHONENUMBER</label>
    <input type="text" name="phoneNumber" value="">

    <label for="role">ROLE</label>
    <input type="text" name="role" value="">
    <input type="submit" name="" value="CREATE">

  </form>
</div>

@endsection
