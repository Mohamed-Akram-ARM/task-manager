@extends('admin.layout')

@section('main-content')


<div class="float-end">
  <form action="/logout"  ><button class=" btn btn-danger float-end"><i class="fa fa-user-plus"></i>logout</button></form>
</div>


<div class="nav">
<div class="p-5">
<div class="card ml-2 bg-info" style="width: 15rem; height:15rem;">
<div class="p-5"><div class="mx-auto p-5 " style="width: 200px;">
    <a href="{{ route('task.index') }}" class=" btn btn-primary btn-lg "><i class="fa fa-book"></i> Tasks</a>

</div></div>   
</div>
</div>

<div class="p-5">
<div class="card ml-2 bg-info" style="width:15rem; height:15rem;">
<div class="p-5"><div class="mx-auto p-5 " style="width: 200px;">
    <a href="{{ route('user') }}" class=" btn btn-primary btn-lg "><i class="fa fa-user"></i> Users</a>

</div></div>   
</div>
</div>

<div class="p-5">
<div class="card ml-2 bg-info" style="width: 15rem; height:15rem;">
<div class="p-5"><div class="mx-auto p-5 " style="width: 200px;">
<a href="{{ route('show') }}" class=" btn btn-primary btn-lg "><i class="fa fa-clock"></i> Pending</a>
</div></div>   
</div>
</div>


</div>


@endsection