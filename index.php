<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Webportal</title>
    <link rel="stylesheet" href="style.css"> 
    <script src="sweetalert.min.js"></script>   

  </head>
  <body>

    <div class="center">
      <h1>Login</h1>

      <form method="post">

        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.html">Signup</a>
        </div>
      </form>     

    </div>

  </body>
</html>
<script>
    swal({
  title: "Good job!",
  text: "Now Your'e In Web Poratal!",
  icon: "success",
  button: "Aww yiss!",
});
</script>

