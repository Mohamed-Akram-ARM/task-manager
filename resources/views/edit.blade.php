@extends('userlayout')

@section('main-content')
<div class="float-start">
<h4 class="pb-3">Edit task <span class="badge bg-info"> {{$task->title}}</span></h4>
</div>


<div class="float-end">
<a href="{{ route('dashboard') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i>All Task</a>
</div>

<div class="clearfix"></div>


  <div class="card card-body bg-light p-4">
    <form action="{{ route('task.update',$task->id) }}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}" aria-describedby="title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea name="description" type="text" class="form-control" id="description" rows="5">{{ $task->description }}</textarea>
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">status</label>
   <select name="status" id="status" class="form-control">
@foreach ($statuses as $status)
<option value="{{ $status['value'] }}" 
{{ $task->status == $status['value'] ? 'selected' : '' }}>
{{ $status['label'] }}
</option>
@endforeach
</select>
  </div>
   <a href="{{ route('dashboard') }}" class="btn btn-secondary m-2"><i class="fa fa-arrow-left"></i>Cancel</a>
  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Save</button>
</form>
  </div>

     
  


  @endsection