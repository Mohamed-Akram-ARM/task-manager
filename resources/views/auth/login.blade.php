@extends('userlayout')


@section('main-content')
<div class="text-center"><h2>Login</h2></div>


@if(session('error'))
<p>{{ session('error') }}</p>
@endif

<form method="POST" action="/login" class="">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="d-grid gap-2 col-6 mx-auto">
   <button type="submit"class="btn btn-primary text-dark ">Login</button>

  </div>
</form>
<br>
<div class="d-grid gap-2 col-6 mx-auto">
   <button type="submit" class=" btn btn-light text-dark ">Forget Password</button>
 <br><br>
<a href="/register" class="btn btn-primary text-dark">Create account</a>
</div>



@endsection