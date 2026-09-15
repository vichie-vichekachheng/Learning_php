<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Centered Container -->
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px; border-radius: 12px;">
      <div class="card-body">
        
        <!-- Header -->
        <h3 class="card-title text-center mb-4 fw-bold">Welcome Back</h3>
        
        <!-- Form -->
        <form action="login.php" method="post">
          <!-- Email Input -->
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
            </div>
          </div>

          <!-- Password Input -->
          <div class="mb-3">
            <label for="password" class="form-label" >Password</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
            </div>
</div>
            <a href="#" class="text-decoration-none small">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold" name="login">Sign In</button>
        </form>

        <!-- Footer / Sign Up Link -->
        <p class="text-center text-secondary small mt-4 mb-0">
          Don't have an account? <a href="#" class="text-decoration-none fw-bold">Sign up</a>
        </p>

      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<<?php
include('config.php');
session_start();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email)){
    echo "<h1>Email is required.</h1>";
  } elseif(empty($password)){
    echo "<h1>Password is required.</h1>";
  } else{
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    try{
      mysqli_query($conn, "INSERT INTO techshop_users(email, password) 
      VALUES('$email', '$password_hash')");
      
      $_SESSION['email'] = $email;
      header("Location: home.php");
      exit();
    } catch (mysqli_sql_exception $e){
      echo "Error : ". $e->getMessage();
    }
  } 
}
?>