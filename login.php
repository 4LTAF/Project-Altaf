<html>
    <head>
        <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
    </head>
<body>

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Login Kasir</h2>

  <form class="login-container" method="POST" action="ceklogin.php">
    <p><input type="text" name="user" placeholder="User Kasir"></p>
    <p><input type="password" name="pass" placeholder="Password"></p>
    <p><input type="submit" name="submit" value="Log in"></p>
  </form>
</div>

</body>
</html>