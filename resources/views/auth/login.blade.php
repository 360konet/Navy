<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ghana Navy</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
  }

  .signup-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px;
  }

  .signup-container h1 {
    text-align: center;
    margin-bottom: 20px;
  }

  .signup-form input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .signup-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>

<div class="signup-container">
<center><img src="{{asset('logo.jpg')}}" width="40%" alt="logo"></center>

  <center><h3>Sign in</h3></center>
  <form method="POST" class="signup-form" action="{{ route('login') }}" enctype="multipart/form-data">
   @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" value="submit">Sign in</button>

    <br>
    <a href="{{url('/register')}}">Dont have an account? Sign up</a>
  </form>
</div>
</body>
</html>
