<?php
    require_once('database.php');
    $id = $_GET['id'];
    $res = $database->read($id);
    $r = mysqli_fetch_assoc($res);
    if(isset($_POST) & !empty($_POST))
    {
	    $username = $database->sanitize($_POST['username']);
	    $email = $database->sanitize($_POST['email']);
        $password = $database->sanitize($_POST['password']);
	    $res = $database->update($username,$email, $password, $id);
	    if($res)
        {
	 	    echo '<script>alert ("Updated Successfully");</script>';
	    }
        else
        {
            echo '<script>alert ("Updation Failed");</script>';
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple CRUD Application in PHP & MySQL - Update</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            color: rgb(255, 255, 255);
            margin: 0px;
            padding: 0px;
            background-size: 100% 120%;
            background:#eaeded;
        }

        .left {
            border: 2px solid transparent;
            display: inline-block;
            position: absolute;
            left: 20px;
            top: 20px;
        }

        .logo {
            filter: invert(100%);
            width: 220px;
            height: 220px;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 0px;
        }
        .container{
            margin-left:18%
        }
        .form-group {
            color:black;
            font-size:20px;
        }
        .form-control{
            font-size:20px;
        }
        
    </style>
</head>

<body>
    <div class="left">
		<a href="Index.html">
            <img class="logo" src="images/logo.png" alt="LOGO">
        </a>
		<!-- <h4>The Royals</h4> -->
	</div>
    <br><br>
    <br><br>
    <div class="container">
        <div class="row">
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
               

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="input1" value="<?php echo $r['username'] ?>"/>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="input6" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="input6" value="<?php echo $r['email'] ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="input7" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password"  name="password" class="form-control" id="input7" value="<?php echo $r['password'] ?>"/>
                    </div>
                </div>
<br><br>
                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Update" />
            </form>
        </div>
    </div>
</body>

</html>