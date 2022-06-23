<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jtoast.css') }}">
    <title>Login</title>
  </head>
  <body>
    <!-- Section: Design Block -->
<!-- Section: Design Block -->
<section class="vh-100" style="background-color: blue;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img href='#about' src="{{ asset('images/login/pensup.jpg') }}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="/login" method="POST">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0 text-secondary">SI</span>
                      <span class="h1 fw-bold mb-0 text-primary">ABDI</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h5>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email address</label>
                      <input type="email" name="email" 
                      class="form-control form-control-lg @error('email') is-invalid
                      @enderror"  required value="{{ old('email') }}"/>
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" name="password"
                      class="form-control form-control-lg" required/>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>
  
                    <a class="small text-muted" href="#!">Forgot password?</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  <!-- Section: Design Block -->
    
    <script src="{{ asset('js/bs.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jtoast.js') }}"></script>
    @if (session()->has('loginError'))
      <script>
        $.toast("{{ session('loginError') }}")
      </script>
    @endif
  </body>
</html>
