@extends('templates.auth.layout')
@section('content_auth')
<div class="row justify-content-center">
  <div class="col-lg-7">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
      <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Create Account</h3>
      </div>
      @if(session('sukses'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="card-body">
        <form action="/register" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input name="user_name" class="form-control" id="inputFirstName" type="text" placeholder="User Name" />
            <label for="inputFirstName">User Name</label>
          </div>
          <div class="form-floating mb-3">
            <input name="email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
            <label for="inputEmail">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input name="no_hp" class="form-control" id="inputNoHP" type="number" placeholder="+628123456789" />
            <label for="inputNoHP">No Handphone</label>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input name="match_password" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                <label for="inputPasswordConfirm">Confirm Password</label>
              </div>
            </div>
          </div>
          <div class="mt-4 mb-0">
            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
          </div>
        </form>
      </div>
      <div class="card-footer text-center py-3">
        <div class="small"><a href="/login">Have an account? Go to login</a></div>
      </div>
    </div>
  </div>
</div>
@endsection