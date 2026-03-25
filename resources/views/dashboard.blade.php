@extends('userlayout')


@section('main-content')
<div>
<div class="float-start">
<h4 class="pb-3">my task </h4>
</div>


<div class="float-end">
  <form action="/logout" ><button class="btn btn-danger"><i class="fa fa-plus"></i> logout</button></form>
</div>

<div class="clearfix"></div>

@foreach ($tasks as $task )
  
<div class="card mt-3">
  <div class="card-header">

    {{ $task->title }}

    <span class="badge rounded-pill bg-warning text-dark">
        {{ $task->created_at->diffForHumans() }}
    </span>
  </div>
<div class="card-body">
     {{ $task->description }}
    <div class="card-text">
        <br>


  
<div class="float-start">
     
   

      @if ($task->status ==='pending')
       <span class="badge rounded-pill bg-warning text-dark">
       pending
    </span>
    @else
    <span class="badge rounded-pill bg-warning text-dark">
       Done
    </span>
          
      @endif
<small>last update {{ $task->updated_at->diffForHumans() }}</small>
 
</div> 
      
        <div class="float-end  " >
 <a href="{{ route('task.edit',$task->id) }}" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
 
 
 </div>
    </div>
<br>
  </div> 
</div>
@endforeach
@if (count($tasks)===0)
<div class="alert alert-danger p2">
  No Task Available
</div>

@endif
  @endsection