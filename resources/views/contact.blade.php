@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
<a class="btn btn-warning text-center mt-5" href="{{url('/')}}">back to home</a>
<form method="POST" action="{{route('submitForm')}}">
    @csrf
<div class="form-group my-4">
  <label for="exampleFormControlInput1">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="form-group my-4">
  <label for="exampleFormControlInput2">nom</label>
  <input type="text" name="nom" class="form-control" id="exampleFormControlInput2" placeholder="nom">
</div>

<div class="form-group my-4">
  <label for="exampleFormControlTextarea3">Example textarea</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea13" rows="3">your message ...</textarea>
</div>
<div class="form-group my-4 d-flex justify-content-center">
  <button type="submit" class="btn btn-info">Send your message</button>
</div>
</form>
@endsection
