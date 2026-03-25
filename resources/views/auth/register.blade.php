@extends('userlayout')


@section('main-content')
<div class="text-center"><h2>Register</h2></div>


<form method="POST" action="/register" class="d-grid gap-2 col-6 mx-auto">
@csrf
<div class="mb-3">
<label  class="form-label" >Name</label> 
<input type="text" name="name" placeholder="Name" class="form-control">
</div>

<div class="mb-3">
<label  class="form-label" >department</label> 
<input type="text" name="department" placeholder="department" class="form-control">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" class="form-control"   name="email" placeholder="Email" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password"  >
  </div>
 <button type="submit"class="btn btn-primary text-dark ">Register</button>
 <label  class="form-label" >if you have accound alredy</label> 
 <a href="/" class="btn btn-primary text-dark">Login</a>


</form>


@endsection