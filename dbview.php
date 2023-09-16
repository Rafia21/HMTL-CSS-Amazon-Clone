<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Users Who are Using Your Website</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<style>
        body {
            color: rgb(255, 255, 255);
            margin: 0px;
            padding: 0px;
           /* background-image: url("images/contact.jpg"); */
			background:#eaeded;
            background-size: 100% 120%;
			
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

		pre{
			padding: 0px;
			margin: 0px;
			color: red;
			background: transparent;
			height: 20px;
			width: 70px;
			display:inline;
		}
		.row{
			margin-left:20%;
		}
		.table{
			color:black;
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
	<br><br>
    <br>
	<div class="container">
		<div class="row">
			<table class="table">
				<tr>
					<th>Id.#</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
				<?php 
				while($r = mysqli_fetch_assoc($res)){
				?>
				<tr>
					<td><?php echo $r['id']; ?></td>
					<td><?php echo $r['username']; ?></td>
					<td><?php echo $r['email']; ?></td>
					<td><?php echo $r['password']; ?></td>
					<td><a href="dbUpdate.php?id=<?php echo $r['id']; ?>"><pre>Edit</pre></a> <a href="dbDelete.php?id=<?php echo $r['id']; ?>"><pre>Delete</pre></a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>