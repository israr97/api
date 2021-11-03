@extends('layouts.app')
@section('title','EapiHome')

@section('content')

<a href="{{url('/eapihome')}}" class="btn btn-success btn-hover" style="margin-left: 500px; width:250px; margin-bottom:30px;margin-top:30px">
    Home </a>

<table class="table table-dark table-hover table-striped">

    @foreach($product as $p)
    <tr>
        <th style="width: 30px;">Product Name</th>
        <td>{{$p->name}}</td>
    </tr>
    <tr>
        <th style="width: 30px;">Detail</th>
        <td>{{substr($p->detail,0,30)}}</td>
    </tr>
    <tr>
        <th style="width: 30px;">Stock Avail</th>
        <td>{{$p->stock}}</td>
    </tr>
    <tr>
        <th style="width: 30px;">Price</th>
        <td>{{$p->price}}</td>
    </tr>
    <tr>
        <th style="width: 30px;">Discount</th>
        <td>{{$p->discount}}%</td>
    </tr>
    <tr>
        <th style="width: 30px;">Rating</th>
        <td>{{$result}}</td>
    </tr>
    <tr>
        <th>Price After Disc</th>
        <td>{{$total}}</td>
    </tr>

    @endforeach
</table >
<br><hr style="width: 700px;">
<table style="width: 900px; margin-left:250px; margin-bottom:40px; border:none" border="1px ">
    <h4 style="text-align: center;"><i>Reviews</i></h4>
    <br>
    <th style="text-align: center;"><h4>user</h4></th>
    <th style="text-align: center;"><h4>Reviews</h4></th>
@foreach($p->reviews as $r)
    <tr>
        <th>{{$r->customer}}</th>  
        <td>Review=> {{$r->review}}</td>
    </tr>
    @endforeach
    
</table>

@endsection