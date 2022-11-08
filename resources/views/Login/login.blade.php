@extends('layout.template')
<!-- <section class="d-flex h-100 w-100 justify-content-center align-items-center" style="background-color: #dbd9a1">
    <div class="d-flex w-25 h-50 rounded-5 border border-dark border-5 justify-content-center align-items-center">
        <form>
            <div>
                <h3 class="text-center mb-4">Login Admin</h3>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-dark text-light w-100 ">Submit</button>
        </form>
    </div>
</section> -->
<div class="login">
  <h1>class="text-center">Login Admin</h1>

  <form class="needs-validation">

    <div class="form-group was-validated">
     <label class= "form-label" for="username">Username</label> 
     <input class="form-control" type="username" id="username" required>
     <div class="invalid-feedback">
      Tolong Masukkan Username
     </div>
    </div>

    <div class="form-group was-validated">
     <label class= "form-label" for="password">Password</label> 
     <input class="form-control" type="password" id="pasword" required>
     <div class="invalid-feedback">
      Tolong Masukkan Password
     </div>
    </div>
    <div class="form-group form-check">
      <input class= "form-check-input"type="checkbox" id="check">
      <label class= "form-check-label" for="check">Remember me</label>
    </div>
    <input class="btn btn-success w-100" type="submit" value="SIGN IN">
  </form>
</div>