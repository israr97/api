@extends('layouts.app')
@section('title','Mails')

@section('content')

<form method="post" action="{{url('/sendmail')}}">
@csrf
<input type="name" name="name" class="form-control" style="width: 300px; margin-left: 300px;"  placeholder="Enter name">
<br>

<input type="email" name="email" class="form-control" style="width: 300px; margin-left: 300px;"  placeholder="Enter Email">
<br>

<input type="phone" name="phone" class="form-control" style="width: 300px; margin-left: 300px;"  placeholder="Enter phone">
<br>

<input type="message" name="message" class="form-control" style="width: 300px; margin-left: 300px;"  placeholder="Enter message">
<br>
<button type="submit" class="btn btn-info" style="margin-left: 300px;">send</button>

</form>




@endsection