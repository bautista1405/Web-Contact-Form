<?php echo  
"<link rel=stylesheet href=./styles.css>"
?>

Hello <?php echo htmlspecialchars($_POST['firstName']); ?>
 <?php echo htmlspecialchars($_POST['lastName']); ?>.
 Your email is <?php echo ($_POST['email']); ?>. 
 
 Your comment: <?php echo htmlspecialchars($_POST['comment']); ?>