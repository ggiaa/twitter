@extends('layouts.login')

@section('form')
<div class="row justify-content-center" style="padding-top: 70px">
    <div class="col-md-4">
        <main class="form-signin mt-4">

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
            <form action="/register" method="POST">
              @csrf                    
              <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
        
              <div class="mt-3 d-flex justify-content-between">            
                <small class="d-block text-center mt-3"><a href="/login" style="text-decoration: none">Already register?</a></small>
                <button class="w-25 btn btn-primary" type="submit">Register</button>
              </div>
            </form>
        </main>
    </div>
</div>
@endsection
