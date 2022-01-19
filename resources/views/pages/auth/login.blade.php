@extends('templates.auth.layout')
@section('content_auth')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
      <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Login</h3>
      </div>
      <div class="card-body">
        <form action="/login" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input name="users" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
            <label for="inputEmail">Email address / User Name</label>
          </div>
          <div class="form-floating mb-3">
            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
            <label for="inputPassword">Password</label>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" type="submit">Login</button>
          </div>
        </form>
      </div>
      <div class="card-footer text-center py-3">
        <div class="small"><a href="/register">Need an account? Sign up!</a></div>
      </div>
    </div>
  </div>
</div>
@endsection