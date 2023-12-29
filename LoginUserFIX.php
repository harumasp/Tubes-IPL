<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Login User</title>
  <link rel="stylesheet" type="text/css" href="Login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url(bg.jpeg);
  background-size: cover;
  background-position: center;
}
.wrapper{
  position: relative;
  width: 500px;
  height: 550px;
  background: #3b888f;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: height .2s ease;
  overflow: hidden;
}

.wrapper.active {
  height: 520px;
}
.wrapper .form-box {
  width: 100%;
  padding: 100px;
}
.wrapper .form-box.login {
  transition: transform .18s ease;
  transform: translateX(0);
}
.wrapper.active .form-box.login {
  transition: none;
  transform: translateX(-400px);
}
.wrapper .form-box.register {
  position: absolute;
  transition: none;
  transform: translateX(400px);
}
.wrapper.active .form-box.register {
  transition: transform .18s ease;
  transform: translateX(0);
}
.wrapper h1{
  font-size: 32px;
  color: #FADAC1;
  text-align: center;
}
.form-input{
  position: relative;
  width: 100%;
  height: 50px;
  border-bottom: 2px solid white;
  margin: 30px 0;
}
.form-input label{
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 16px;
  color: white;
  font-weight: 500;
  pointer-events: none;
  transition: 0.5s;
}
.form-input input {
  width: 100%;
  height: 100%;
  position: relative;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: white;
  font-weight: bold;
  padding: 0 35px 0 5px;
}
.form-input input:focus~label,
.form-input input:valid~label {
  top: -5px;
}
.form-input .icon {
  position: absolute;
  right: 8px;
  font-size: 20px;
  color: white;
  line-height: 57px;
}
.remember-forgot {
  font-size: 14px;
  color: white;
  font-weight: bold;
  margin: -15px 0 15px;
  display: flex;
  justify-content: space-between;
}
.remember-forgot label{
  accent-color: white;
  margin-left: 3px;
}
.remember-forgot a {
  color: white;
}
.remember-forgot a {
  text-decoration: underline;
}
.btn {
  width: 100%;
  height: 45px;
  background: white;
  border: none;
  outline: none;
  border-radius: 6px;
  font-size: 20px;
  letter-spacing: 1px;
  color: midnightblue;
  font-weight: bold;
  cursor: pointer;
}
.login-register {
  font-weight: bold;
  color: white;
  font-size: 14px;
  text-align: center;
  margin: 25px 0 10px;
}
.login-register p a {
  color: white;
  font-weight: bold;
}
.login-register p a:hover {
  text-decoration: underline;
}



.form-input i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input{
  accent-color: #FADAC1;
  margin-right: 3px;

}
.remember-forgot a{
  color: #FADAC1;
  text-decoration: none;

}
.remember-forgot a:hover{
  text-decoration: underline;
}
.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #FADAC1;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #1D313C;
  font-weight: 600;
}
.wrapper .login-register{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;

}
.login-register p a{
  color: #FADAC1;
  text-decoration: none;
  font-weight: 2;
}
.login-register p a:hover{
  text-decoration: underline;
}
</style>
</head>
<?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<body>
  <div class="wrapper">
    <span class="close"><i class="fa-solid fa-xmark"></i></span>
    <div class="form-box login">
      <h1>Login User</h1>
      <form action="J_moobil.php" method="post">
        <div class="form-input">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" name="ID User" required>
        <label>ID User</label>
      </div>
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      <input type="text" name="nama" required>
      <label>Nama</label>
      </div>
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      <input type="text" name="password" required>
      <label>Password</label>
      </div>
     <div class="form-input">
       <span class="icon"><i class="fa-solid fa-lock"></i></span>
    <input type="text" name="no hp" required>
    <label>No HP</label>
    </div>
    <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="login-register">
        <p>Dont have an account? <a href="#" class="register-link">Register</a></p>
      </div>
    </form>
  </div>
  
  <!-- Regist -->

  <div class="form-box register">
    <h1>Registration</h1>
    <form action="J_moobil.php" method="post">
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
      <input type="text" name="ID User" required>
      <label>ID User</label>
    </div>
    <div class="form-input">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
      <input type="text" name="Nama" required>
      <label>Nama</label>
    </div>
      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
      <input type="text" name="password" required>
      <label>Password</label>
    </div>
    <div class="form-input">
      <span class="icon"><i class="fa-solid fa-lock"></i></span>
    <input type="text" name="no hp" required>
    <label>No HP</label>
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

    </form>
  </div>
</body>
</html>