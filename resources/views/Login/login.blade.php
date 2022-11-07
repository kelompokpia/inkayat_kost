@extends('layout.template')
<section class="d-flex h-100 w-100 justify-content-center align-items-center" style="background-color: #dbd9a1">
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
</section>