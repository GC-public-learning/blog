@extends('layout')
@section('content')
	<h1>{{ $customer->name }}</h1>
	<hr>
	<p><strong>Email :</strong> {{ $customer->email}}</p>
	<p><strong>Company :</strong> {{ $customer->company->name}}</p>
@endsection