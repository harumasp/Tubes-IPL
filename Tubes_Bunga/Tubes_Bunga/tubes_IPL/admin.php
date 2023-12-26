<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Login Admin</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
  <div class="wrapper">
    <span class="close"><i class="fa-solid fa-xmark"></i></span>
    <div class="form-box login">
      <h1>Login</h1>
      <form action="#" method="post">
        <div class="form-input">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" name="ID Admin" required>
        <label>ID Admin</label>
      </div>
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      <input type="text" name="password" required>
      <label>Password</label>
    </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" ><a href="strukpembayaran.html"></a>Login</button>
<!-- Blum bisa nyambung kehalaman berikutnya -->

      <div class="login-register">
        <p>Dont have an account? <a href="#" class="register-link">Register</a></p>
      </div>
    </form>
  </div>
  
  <!-- Regist -->

  <div class="form-box register">
    <h1>Registration</h1>
    <form action="#" method="post">
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
      <input type="text" name="username" required>
      <label>ID Admin</label>
    </div>
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
      <input type="text" name="ID Admin" required>
      <label>No Hp</label>
    </div>
    <div class="form-input">
      <span class="icon"><i class="fa-solid fa-lock"></i></span>
    <input type="text" name="password" required>
    <label>Password</label>
  </div>
    <div class="remember-forgot">
      <label><input type="checkbox">I agree to the terms & conditions</label>
    </div>
    <button type="submit" class="btn">Register</button>
    <div class="login-register">
      <p>Already have an account? <a href="#" class="login-link">Login</a></p>
    </div>
  </form>
</div>
  </div>
  <script type="text/javascript">
    const wrapper = document.querySelector('.wrapper');
    const loginlink = document.querySelector('.login-link');
    const registerlink = document.querySelector('.register-link');

    registerlink.addEventListener('click', ()=> {
      wrapper.classList.add('active');
    });
    loginlink.addEventListener('click', ()=> {
      wrapper.classList.remove('active');
    });
  </script>
</body>
</html>