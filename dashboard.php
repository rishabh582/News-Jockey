<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>
  
    <?php echo "<h1 align='center'> Logged in as ".$_SESSION['username']." </h1>" ?>

    <h2 align='center'><a href="home.html">WELCOME TO NEWS JOCKEY</a></h2>
    <h2 align='center'><a href="end.html">LOGOUT</a></h2>
  

</body>
</html>