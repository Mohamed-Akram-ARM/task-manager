@extends('admin.layout')


@section('main-content')
<div>
<div class="float-start">
<h4 class="pb-3">my task</h4>
</div>

<div class="float-end">
<a href="{{ route('task.create') }}" class="btn btn-info">
  <i class="fa fa-plus-circle"></i> Create Task
</a>
</div>
<div class="float-end m-1"><div class="float-end">
<a href="{{ route('adminDashboard') }}" class="btn btn-info " >
  <i class="fa fa-arrow-left"></i> dashboard
</a>
</div></div>


<div class="clearfix"></div>

@foreach ($tasks as $task )
  
<div class="card mt-3">

  <div class="card-header">

  <p>Employee:-  {{ $task->user->name }} </p>

   
  </div>

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
<small>last update   {{ $task->updated_at->diffForHumans() }}</small>
 
</div> 
      
        <div class="float-end  " >
 <a href="{{ route('task.edit',$task->id) }}" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
 <form action="{{ route('task.destroy',$task->id) }}" style="display:inline" method="POST">
  @csrf
  @method('DELETE')
<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
 </form>
 
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