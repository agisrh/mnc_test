
<!DOCTYPE html>
<html>
<head>
	<title>MNC Portal Test</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
  <br><br>
  <i>username : admin</i><br>
  <i>password : admin</i><br>
</form>

</body>
</html>

<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        echo "<p class='succes'>Anda berhasil login sebagai  <strong>$username</strong></p>";
    } else {
        // Tampilkan Pesan Error
        echo '<p class="error">Username Atau Password Tidak Benar</p>';
    }
}    