
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
</ul
@endsection
