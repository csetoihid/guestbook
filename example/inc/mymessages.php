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
      <li ><a href="user.php">Users</a></li>
      <li><a href="messages.php">All messages</a></li>
      <li class="active"><a href="my_messages.php">My messages </a></li>
      <li><a href='logout.php'>Logout</a></li>
    </ul>
  </div>
</nav>    
  <a class='btn' href="<?php echo baseURL;?>/example/new_message.php"> New message </a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Ser</th>
        <th>Message</th>
        <th>Repyed from</th>
        <th>Created Date</th>
        <th>Created By</th>
        <!-- <th>Actions</th> -->
      </tr>
    </thead><tbody>
    <?php 
      $i = 0;
    	foreach ($vars as $message) {
        $i++;
    	?>
    		<tr>
            <td><?=$i?>.</td>
		        <td><?=$message['message']?></td>
            <td><?=$message['p_message']?></td>
            <td><?=$message['created_at']?></td>
            <td><?=$message['user_name']?></td>
            <!-- <td><a href="edit_message.php?id=<?php echo $message['id']; ?>">Edit</a></td> -->
            
		    </tr>
    	<?php
    	}
     ?></tbody>
  </table>
  
</div>

</body>
</html>
