<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link rel="stylesheet" href="register.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #f4f6f8;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.register-container {
  background: #fff;
  padding: 30px;
  width: 100%;
  max-width: 400px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.register-form h2 {
  margin-bottom: 20px;
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  color: #555;
  margin-bottom: 5px;
  font-weight: 500;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  outline: none;
  transition: border-color 0.3s ease;
}

.form-group input:focus {
  border-color: #007bff;
}

.submit-btn {
  width: 100%;
  padding: 12px;
  background: #007bff;
  color: #fff;
  border: none;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.submit-btn:hover {
  background: #0056b3;
}

.login-link {
  margin-top: 15px;
  text-align: center;
  font-size: 14px;
  color: #555;
}

.login-link a {
  color: #007bff;
  text-decoration: none;
}

.login-link a:hover {
  text-decoration: underline;
}
.is-invalid{
    border: 1px solid red;
}
.invalid-feedback{
    color: red;
}

</style>
<body>
  <div class="register-container" method="post" action="">
    @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{Session::get('error')}}</div>
    @endif
    <form class="register-form" action="{{ route('process-register') }}" method="post">
        @csrf
      <h2>User Register</h2>

      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="name" value="{{ old('name') }}" name="name" placeholder="Enter full name" />
        @error('name')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email" />
        @error('email')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Create password" />
        @error('password')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="confirm">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm password" />
            @error('password_confirmation')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <button type="submit" class="submit-btn">Register</button>

      <p class="login-link">Already have an account? <a href="{{ route('account.login') }}">Login here</a></p>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </div>
</body>
</html>
