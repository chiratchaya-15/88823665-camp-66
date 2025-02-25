@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="text-center card-header">
        <a href="../index2.html" class="link-dark">
          <h1 class="mb-0"><b>Admin</b>LTE</h1>
        </a>
      </div>
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('/register')}}" onsubmit="return myfunction();" method="post">
          @csrf
          <div class="mb-1 input-group">
            <div class="form-floating">
              <input id="name" name="name" type="name"  class="form-control" placeholder="" />
              <label for="name">Full Name</label>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback" id="invalid-name">
              </div>
            </div>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
          </div>
          <div class="mb-1 input-group">
            <div class="form-floating">
              <input id="email" name="email" type="email"  class="form-control" placeholder="" />
              <label for="email">Email</label>
              <div class="valid-feedback">
            </div>
            <div class="invalid-feedback" id="invalid-name">
            </div>
            </div>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="mb-1 input-group">
            <div class="form-floating">
              <input id="pass" name="password" type="password" class="form-control" placeholder="" />
              <label for="pass">Password</label>
              <div class="valid-feedback">
              </div>
              <div class="invalid-feedback" id="invalid-name">
              </div>
            </div>
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <div class="row">
            <div class="col-8 d-inline-flex align-items-center">
              <div class="form-check">
                <input class="form-check-input" id="mycheckbox"  type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <div class="col-4">
              <div class="gap-2 d-grid">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
          </div>
        </form>
        <button class="btn" onclick="myfunction()">Click me</button>
        <div class="gap-2 mb-3 text-center social-auth-links d-grid">
          <p>- OR -</p>
          <a href="#" class="btn btn-primary">
            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-danger">
            <i class="bi bi-google me-2"></i> Sign in using Google+
          </a>
        </div>
        <p class="mb-0">
          <a href="login.html" class="text-center link-primary"> I already have a membership </a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script>
    function myfunction() {
        let name = $('#name');
        let email = $('#email');
        let pass = $('#pass');
        let mycheckbox = $('#mycheckbox');

        let isValid = true;

        // ตรวจสอบ Name
        if (name.val().trim() === "") {
            name.addClass('is-invalid').removeClass('is-valid');
            $('#invalid-name').html("กรุณาระบุข้อมูล Full Name");
            isValid = false;
        } else {
            name.addClass('is-valid').removeClass('is-invalid');
            if (!$('#valid-name').length) {
                name.after('<div id="valid-name" class="valid-feedback"></div>');
            }
        }

        // ตรวจสอบ Email
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        email.next('.invalid-feedback, .valid-feedback').remove();
        if (!emailPattern.test(email.val())) {
            email.addClass('is-invalid').removeClass('is-valid');
            email.after('<div class="invalid-feedback">กรุณากรอกอีเมลที่ถูกต้อง ต้องมี @ และ .</div>');
            isValid = false;
        } else {
            email.addClass('is-valid').removeClass('is-invalid');
            email.after('<div class="valid-feedback"></div>');
        }

        // ตรวจสอบ Password
        let passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        pass.next('.invalid-feedback, .valid-feedback').remove();
        if (!passPattern.test(pass.val())) {
            pass.addClass('is-invalid').removeClass('is-valid');
            pass.after('<div class="invalid-feedback">รหัสผ่านต้องมีตัวเลข ตัวอักษรพิมพ์เล็ก และตัวอักษรพิมพ์ใหญ่</div>');
            isValid = false;
        } else {
            pass.addClass('is-valid').removeClass('is-invalid');
            pass.after('<div class="valid-feedback"></div>');
        }

        // ตรวจสอบ Checkbox
        if (!mycheckbox.is(':checked')) {
            alert("คุณต้องยอมรับเงื่อนไขก่อน");
            isValid = false;
        }.

        return isValid;
    }
</script>
@endsection
