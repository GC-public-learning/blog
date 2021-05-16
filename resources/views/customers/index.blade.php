
@extends('layout')
@section('content')
<h1>Customers</h1>


<!-- get data (old way) -->
<ul>
	<?php foreach ($customers as $c): ?>
		<!-- get one element -->
		<li><?= $c->name ?></li>

		<!-- get a json (from model) -->
		<li><?= $c ?></li>
	<?php endforeach; ?>
</ul>

<!-- get data (with blade) -->
<ul>
	@foreach($customers as $c)
		<li><?= $c->name ?></li>
		<li>{{ $c }}</li>
	@endforeach
</ul>
<form action="customers" method="POST">
	<!-- laravel tool to forbid csrf with a token -->
	@csrf
	<div class="form-group">
		<input type="text" class="form-control @error('nickname') is-invalid 
			@enderror" name="nickname">

		@error('nickname')
		 <div class="invalid-feedback">
      		{{ $errors->first('nickname')}}
   		 </div>
   		@enderror
		<button type="submit" class="btn btn-primary">add customer</button>
	</div>
	
</form>
@endsection
