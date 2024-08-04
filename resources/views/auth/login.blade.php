@extends('layouts.app')
@section('title') Login @endsection
@section('content')
    <div class="py-4 d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="col-10 col-sm-8 col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="h3 text-center mb-4">
                        Login
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus>
                            @error('username')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" id="btnPassword" value="0"><i class="bi-eye-slash"></i></button>
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-brown text-white w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .btn-brown {
            background-color: #8B4513;
            border-color: #8B4513;
        }

        .btn-brown:hover {
            background-color: #A0522D;
            border-color: #A0522D;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #8B4513;
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }

        .input-group .btn {
            border-radius: 0;
        }

        .input-group .form-control {
            border-right: none;
        }
    </style>

    <script>
        document.getElementById('btnPassword')
            .addEventListener('click', function () {
                if (this.value === '0') {
                    this.previousElementSibling.setAttribute('type', 'text');
                    this.classList.add('btn-danger');
                    this.classList.remove('btn-outline-secondary');
                    this.firstElementChild.classList.add('bi-eye');
                    this.firstElementChild.classList.remove('bi-eye-slash');
                    this.value = 1;
                } else {
                    this.previousElementSibling.setAttribute('type', 'password');
                    this.classList.add('btn-outline-secondary');
                    this.classList.remove('btn-danger');
                    this.firstElementChild.classList.add('bi-eye-slash');
                    this.firstElementChild.classList.remove('bi-eye');
                    this.value = 0;
                }
            });
    </script>
@endsection
