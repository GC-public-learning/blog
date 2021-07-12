@extends('layout')
@section('content')
<h1>Edit {{ $customer->name }}'s profile</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
	<!-- laravel tool to forbid csrf with a token -->
	@method('PATCH')
	@include('/customers/includes.form')
	<button type="submit" class="btn btn-primary">Save infos</button>	
</form>
@endsection
