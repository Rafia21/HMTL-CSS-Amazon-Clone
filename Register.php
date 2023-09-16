<?php 

include 'Connection.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
        <link rel="stylesheet" href="login.css">
        <title>The Royals.com</title>
    </head>
    <body>
     
     <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>REGISTERATION</h2>
                    <form  action="" method="POST">
                        <input type="text" class="input-box" name="username" placeholder="User Name" required>

                        <input type="email" class="input-box" name="email" placeholder="Email Id" required>

                        <input type="password" class="input-box" name="password" placeholder="Password" required>

                        <input type="password" class="input-box" name="cpassword" placeholder="Confirm Password" required>

                        <button type="submit" name="submit" class="submit-btn">Submit</button>

                        <input type="checkbox"><span>Remember Me</span>
                    </form>

                    <a href="Index.php"><button type="button" class="btn">I have an account</button></a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
     </div>
    </body>
</html>