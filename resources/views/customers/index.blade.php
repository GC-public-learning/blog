
@extends('layout')
@section('content')
<h1>Customers</h1>

<!-- get data (with blade) -->
<ul>
	@foreach($customers as $c)
		<li>{{$c->name}} <em class="text-muted">{{$c->email}}</em></li>
		<li>{{ $c }}</li>
	@endforeach
</ul>
<form action="customers" method="POST">
	<!-- laravel tool to forbid csrf with a token -->
	@csrf
	<div class="form-group">
		<input type="text" class="form-control @error('nickname') is-invalid 
			@enderror" name="nickname" placeholder="name">
		@error('nickname')
		 <div class="invalid-feedback">
		 	<!-- return the error handled by the controller with the chosen rules  -->
      		{{ $errors->first('nickname')}}
   		 </div>
   		@enderror
   	</div>

	<div class="form-group">
		<input type="email" class="form-control @error('email') is-invalid 
			@enderror "name="email" placeholder="email">
		@error('email')
		 <div class="invalid-feedback">
      		{{ $errors->first('email')}}
   		 </div>
   		@enderror
	</div>

	<button type="submit" class="btn btn-primary">add customer</button>
	
	
</form>
@endsection
