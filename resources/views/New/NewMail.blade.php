@extends('layouts.app')
@section('title','NewMail')


@section('content')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form method="post" action="{{ url ('newmailsend')}}" style="width: 300px; margin-left:400px; margin-top:30px;">
@csrf

<input type="text" name="name" class="form-control" placeholder="name">
<br>
<input type="email" name="email" class="form-control" placeholder="email">
<br>
<input type="phone" name="phone" class="form-control" placeholder="phone">
<br>
<textarea name="message"  style="width: 300px; height:98px;" placeholder="Message"></textarea><br>
<br>
<button class="btn btn-info" style="width: 200px; height:50px;">Send Mail</button>

</form>

@endsection