@extends('admin.layout')


@section('main-content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">TASK</th>
      <th scope="col">EMPLOEE NAME</th>
      <th scope="col">Email</th>

      <th scope="col">START DATE</th>
    </tr>
  </thead>
  
  <tbody>
     @foreach ($users as $user)
     @foreach ($task as $tasks )
       
     
    <tr>
 
      @if ($tasks-> status==='pending' && $tasks-> user_id===$user->id)
          
      <th scope="row"> {{$tasks->title}}</th> 
 
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
        @endif
         
    </tr>
    @endforeach
     @endforeach
   
  </tbody>
</table>

 @endsection
