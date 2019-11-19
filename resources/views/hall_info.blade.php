@extends('layout.app')
@section('content')
<a href="/towns/{{$id}}" class="btn btn-dark"> Go Back </a>
@foreach ($hall_info as $hall_info)
<div class="container">
    <h1>Available Hall# {{$count}}</h1>
    <div class="well list-group-item">
        <h1>Wedding Hall Name</h1>
        <h3>{{$hall_info->hall}}</h3>
    </div>
</div>
<div class="container">
    <div class="well list-group-item">
        <h1>Location</h1>
        <h3>{{$hall_info->town}},{{$hall_info->city}}</h3>
    </div>
</div>
<div class="container">
    <div class="well list-group-item">
        <h1>Total Capacity</h1>
        <h3>{{$hall_info->capacity}}</h3>
    </div>
</div>
<div class="container">
    <div class="well list-group-item">
        <h1>Price per head</h1>
        <h3>{{$hall_info->price}}</h3>
    </div>
</div>
<div class="container">
    <div class="well list-group-item">
        <h1>Description</h1>
        <h3>{{$hall_info->desc}}</h3>
    </div>
</div>
<hr style="border: 2px solid black;
  border-radius: 2px;">
<?php $count++;?>
@endforeach
@endsection
