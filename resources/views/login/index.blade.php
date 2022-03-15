<x-login-logout>
  <x-slot:title>
    Login
  </x-slot:title>

  <div class="row justify-content-center" style="padding-top: 120px">
    <div class="col-md-4">    
      <main class="form-signin mt-4">   
             
          @if (session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif

          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          
          <form action="/login" method="POST">
            @csrf                    
            
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" autofocus placeholder="Username" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            
            <div class="mt-3 d-flex justify-content-between">
              <small class="d-block text-center mt-3"><a href="/register" style="text-decoration: none">Create new account</a></small>
              <button class="w-25 btn btn-primary" type="submit">Login</button>
            </div>
            
          </form>
      </main>
    </div>
  </div>

</x-login-logout>
