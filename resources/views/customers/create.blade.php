@extends('layout')
@section('content')
<h1>create customer</h1>

<form action="/customers" method="POST">
	<!-- laravel tool to forbid csrf with a token -->
	@include('/customers/includes.form')
	<button type="submit" class="btn btn-primary">add customer</button>	
</form>
@endsection
