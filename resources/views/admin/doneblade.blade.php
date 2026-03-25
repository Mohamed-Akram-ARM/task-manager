@extends('admin.layout')


@section('main-content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">DEP</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  
  <tbody>
     @foreach ($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <td>{{$user->department}}</td>
      <td>{{$user->email}}</td>
    </tr>
     @endforeach
   
  </tbody>
</table>

 @endsection
