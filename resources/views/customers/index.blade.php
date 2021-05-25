
@extends('layout')
@section('content')
<h1>Customers</h1>

<!-- get data (with blade) -->
<ul>
	@foreach($customers as $c)
		<li>{{$c->name}} <em class="text-muted">{{$c->company->name}}</em></li>
		<li>{{ $c }}</li>
	@endforeach
</ul>
<form action="customers" method="POST">
	<!-- laravel tool to forbid csrf with a token -->
	@csrf
	<div class="form-group">
		<input type="text" class="form-control @error('name') is-invalid 
			@enderror" name="name" placeholder="name">
		@error('name')
		 <div class="invalid-feedback">
		 	<!-- return the error handled by the controller with the chosen rules  -->
      		{{ $errors->first('name')}}
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

	<div class="form-group">
		<div class="form-check">
  			<input class="form-check-input" type="checkbox" name="status">
  			<label class="form-check-label">active ?</label>
		</div>
		<script>
			
		</script>
	</div>

	<div class="form-group">
		<select class="form-select @error('company_id') is-invalid 
			@enderror "name="company_id" aria-label="Default select example" 
			name="entreprise_id">
			@foreach($companies as $c)
		  		<option value="{{ $c->id}}">{{$c->name}}</option>
		 	@endforeach
		</select>
		@error('company_id')
		 <div class="invalid-feedback">
      		{{ $errors->first('company_id')}}
   		 </div>
   		@enderror
	</div>

	<button type="submit" class="btn btn-primary">add customer</button>	
</form>
@endsection
