@extends('layout')
@section('content')
	<h1>{{ $customer->name }}</h1>
	<a href="/customers/{{ $customer->id }}/edit" class="btn btn-secondary my-3">Edit</a>
	<hr>
	<p><strong>Email :</strong> {{ $customer->email}}</p>
	<p><strong>Company :</strong> {{ $customer->company->name}}</p>
@endsection