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

  select{
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>
</head>
<body>

<div class="signup-container">
<center><img src="{{asset('logo.jpg')}}" width="40%" alt="logo"></center>

  <center><h3>Sign up</h3></center>
  <form method="POST" class="signup-form" action="{{ route('register') }}" enctype="multipart/form-data">
   @csrf
    <input type="text" name="name" placeholder="Username" required>


    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
<span id="phoneError" style="color: red;"></span>

<script>
    document.getElementById('phone_number').addEventListener('input', function() {
        var phoneNumber = this.value.replace(/\D/g, ''); // Remove non-numeric characters
        if (phoneNumber.length > 10) {
            this.value = phoneNumber.slice(0, 10); // Trim to 10 digits
        }
        document.getElementById('phoneError').textContent = phoneNumber.length === 10 ? '' : 'Please enter a 10-digit phone number';
    });
</script>

    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit" value="submit">Sign Up</button>
    <br>
    <a href="{{url('/login')}}">Already having an account? Sign in</a>
  </form>
</div>
</body>
</html>
