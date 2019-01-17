<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<div class="container">
  <h2>Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?></h2>  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="user.php">Users</a></li>
      <li class="active"><a href="messages.php">All messages</a></li>
      <li ><a href="my_messages.php">My messages </a></li>
      <li><a href='logout.php'>Logout</a></li>
    </ul>
  </div>
</nav>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="5%">Ser</th>
        <th width="70%">Message</th>
        <th width="15%">Created Date</th>
        <th width="10%">Created By</th>
        <th width="10%">Action</th>
      </tr>
    </thead><tbody>
    <?php 
      $i = 0;
    	foreach ($vars as $message) {
        //print_r($message); 
        $i++;
    	?>
    		<tr>
            <td><?=$i?>.</td>
		        <td>
              <?php 
                echo $message['message'];
                if(!empty($message['child'])){
              ?>
              <table class="table">

                <?php 
                  foreach ($message['child'] as $child) { 
                    echo "<tr>";
                 
                    echo '<td width="70%">'.'<div class="replyMessage">"'.$child['parent_message'].'"</div>'.$child['message'].'</td>';
                    echo "<td width='20%''>".$child['created_at']."</td>";
                    echo "<td width='10%'><a href='".baseURL."/example/new_message.php?p_id=".$child['id']."'>Reply</a></td>";
                    echo "</tr>";
                  }
                ?>
              </table>
              <?php } ?>
            </td>
            
            <td><?=$message['created_at']?></td>
            <td><?=$message['user_name']?></td>
            <td>
              <a href="<?php echo baseURL;?>/example/new_message.php?p_id=<?php echo $message['id'];?>">Reply</a>
            </td>
            
		    </tr>
    	<?php
    	}
     ?></tbody>
  </table>
</div>

</body>
</html>
