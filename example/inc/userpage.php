<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?></h2>  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo baseURL;?>/example/user.php">Users</a></li>
      <li><a href="messages.php">All messages</a></li>
      <li><a href="my_messages.php">My messages </a></li>
      <li><a href='logout.php'>Logout</a></li>
    </ul>
  </div>
</nav>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead><tbody>
    <?php if($_SESSION['user']['user_role'] == 2){
    	foreach ($vars as $user) {
    	?>
    		<tr>
		        <td><?=$user['fname']?></td>
		        <td><?=$user['lname']?></td>
		        <td><?=$user['email']?></td>
		    </tr>
    	<?php
    	}
    }else{ ?>
      <tr>
        <td><?=$_SESSION['user']['fname']?></td>
        <td><?=$_SESSION['user']['lname']?></td>
        <td><?=$_SESSION['user']['email']?></td>
      </tr>    
    <?php } ?></tbody>
  </table>
  <p><a href='logout.php'>Logout</a></p>
</div>

</body>
</html>
