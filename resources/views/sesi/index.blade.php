@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>login</h1>
        <form action="/admin/login"method= "POST">
            @csrf
            <div class="mb-3">
                <label for="username"classs="form-label">Username</label>
                <input type="username"name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password"classs="form-label">Password</label>
                <input type="password"name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn_primarry">Login</button>
            </div>
        </form>
    </div>
@endsection