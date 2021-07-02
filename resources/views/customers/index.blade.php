
@extends('layout')
@section('content')
<h1>Customers</h1>
<!--- use bootstrap class to make a button with the link with a margin of 3--->
<a href="/customers/create" class="btn btn-primary my-3">new customer</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Company</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($customers as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td><a href="/customers/{{ $c->id}}">{{$c->name}}</a></td>
      <td>{{$c->status}}</td>
      <td>{{$c->company->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
