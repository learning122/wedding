@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger submit-not">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success submit-not">
		{{session('success')}}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger submit-not">
		{{session('error')}}
	</div>
@endif
