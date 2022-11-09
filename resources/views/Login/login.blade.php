@extends('layout.template')
@section('login')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
  <h1>LOGIN</h1>
  <form action="/Admin/dasbord" method="post">
      @csrf
      <div class="mb-3">
          <label for="name" class="form-label">Emaillabel</label>
          <input type="text" name="name" value="{{ Session::get('name') }}"  class="form-control">
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Passwordlabel</label>
          <input type="password" name="password" class="form-control">
      </div>
      <div class="mb-3 d-grid">
          <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
          </div>
        </form>
      </div>
@endsection

