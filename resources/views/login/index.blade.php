@extends('layouts.login')

@section('form')
<div class="row justify-content-center" style="padding-top: 120px">
    <div class="col-md-4">
        <main class="form-signin mt-4">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="POST">
              @csrf                    
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3"><a href="/register">Create new account</a></small>
        </main>
    </div>
</div>
@endsection
