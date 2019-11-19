
@extends('layout.app')

@section('content')
<a href="/" class="btn btn-dark"> Go Back </a>
<div class="container">
<h1>Available Wedding Halls in {{$city->city}}</h1>
		@foreach($towns as $key => $town)
            <div class="container">
                <div class="well list-group-item">
                    <h3><a style="color:#0d91d0;" href="/hall/{{$key}}" >{{$town}}</a></h3>
                </div>
            </div>
		@endforeach
</div>
@endsection
