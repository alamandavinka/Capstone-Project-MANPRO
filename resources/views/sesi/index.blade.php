@extends('layout/aplikasi')

@section('konten')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="w-50 border rounded px-4 py-4">
        <h1 class="text-center">Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection