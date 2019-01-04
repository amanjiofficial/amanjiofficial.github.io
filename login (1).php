<html>
<head>
<style>

.login {
  margin: 60px auto;
  width: 400px;
  height: 450px;
  padding: 50px 50px;
  background: #D8D8D8;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 50px;
  font-size: 30px;
  font-weight: 300;
  color: black;
  text-align:center;
  background: #f7f7f7;

}

.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:15px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:5px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:18px;
}


</style>
</head>
<body background="gallery.jpg">
<form class="login" action="login.php">
    <h1 class="login-title">LOGIN</h1>
    <input type="text" class="login-input" placeholder="Username" autofocus>
    <input type="password" class="login-input" placeholder="Password">
    <input type="submit" value="Login" class="login-button">
  <p class="login-lost"><a href="">Forgot Password?</a></p>
  </form>
</body>
</html>
