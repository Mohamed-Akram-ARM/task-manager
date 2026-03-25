@extends('admin.layout')

@section('main-content')
<div class="float-start">
<h4 class="pb-3">Create task</h4>
</div>


<div class="float-end">
<a href="{{ route('index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> All Task</a>
</div>

<div class="clearfix"></div>


  <div class="card card-body bg-light p-4">
    <form action="{{ route('task.store') }}" method="POST">
        @csrf

     <div class="mb-3">
    <label for="user_id" class="form-label">User</label>

    <select name="user_id" id="user_id" class="form-control">

        @foreach ($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach

    </select>
</div>

  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea name="description" type="text" class="form-control" id="description" rows="5"></textarea>
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">status</label>
   <select name="status" id="status" class="form-control">
    @foreach ($statuses as $status )
    <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
        
    @endforeach
   </select>
  </div>
 
  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Save</button>
</form>
  </div>

     
  


  @endsection