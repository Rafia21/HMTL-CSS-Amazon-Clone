<?php 

include 'Connection.php';

error_reporting(0);

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
                    <h2>LOGIN</h2>
                    
                    <form  action="" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                        <input type="email" class="input-box" name="email" placeholder="Your Email Id" required>

                        <input type="password" class="input-box" name="password" placeholder="Enter Password" required>

                        <button type="submit" name="submit" class="submit-btn">Submit</button>

                        <input type="checkbox"><span>Remember Me</span>
                    </form>

                    <a href="Register.php">  <button type="button" class="btn">I am New here</button></a>
                    <button type="button" class="btn" onclick="window.open('dbview.php','_self')">Login As Admin</button>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
     </div>
    </body>
</html>