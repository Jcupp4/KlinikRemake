  @extends('auth.Auth')

  @section('title')
  <title>Login | Aplikasi</title>
  @endsection

  @section('form')
  <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-4">
          <div class="card login-box-container">
              <div class="card-body">
                  <div class="authent-logo">
                      <a href="#">Sign In</a>
                  </div>
                  <div class="authent-text">
                      <p>System Informasi Klinik</p>
                      <p>Please Sign-in to your account.</p>
                  </div>
                  @if(session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{session('loginError')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <form action="{{ route ('login.store') }}" method="post">
                      @csrf
                      <div class="mb-3">
                          <div class="form-floating">
                              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus required old>
                              <label for="floatingInput">Email address</label>
                          </div>
                      </div>
                      <div class="mb-3">
                          <div class="form-floating">
                              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                              <label for="floatingPassword">Password</label>
                          </div>
                      </div>
                      <div class="d-grid">
                          <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
                      </div>
                  </form>
                  <div class="authent-reg">
                      <p>Not registered? <a href="/register">Create an account</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
