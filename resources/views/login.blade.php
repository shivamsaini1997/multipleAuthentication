<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Segoe UI", sans-serif;
  background: linear-gradient(135deg, #74ebd5, #ACB6E5);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-container {
  background: #fff;
  padding: 40px 30px;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.login-form h2 {
  margin-bottom: 25px;
  text-align: center;
  color: #333;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 6px;
  font-weight: 500;
  color: #555;
}

.input-group input {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  transition: border 0.3s;
}

.input-group input:focus {
  border-color: #007bff;
}

button {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background-color: #0056b3;
}

.footer-text {
  margin-top: 15px;
  text-align: center;
  font-size: 14px;
  color: #666;
}

.footer-text a {
  color: #007bff;
  text-decoration: none;
}

.footer-text a:hover {
  text-decoration: underline;
}
.is-invalid{
    border: 1px solid red;
}
.invalid-feedback{
    color: red;
}

  </style>
</head>

<body>

  <div class="login-container">
        @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{Session::get('error')}}</div>
    @endif
    <form class="login-form" action="{{ route('account.authLogin') }}" method="post">
        @csrf
      <h2>Login</h2>

      <div class="">
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
        @error('email')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <div class="">
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
            @error('password')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
      </div>

      <button type="submit">Login</button>
      <p class="footer-text">Don't have an account? <a href="{{ route('account.register') }}">Register</a></p>
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
