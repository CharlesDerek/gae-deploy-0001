<?php session_start();


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "session2.php" page.</h1>


<?php
  
echo "<br><h1>".$_SESSION['greeting']."</h1><br>";
?>


<div margin="15px">
    <br><a href="/misc/session1.php" class="btn-hero w-button">Back to session 1 page</a><a href="/" target="_blank" class="btn-hero btn-hero2 hvr-bounce-to-right w-button w--current">Contact Us</a>
</div>
<div margin="15px">
    <br><a href="/9.php" class="btn-hero w-button">Back to section 9</a><a href="/" target="_blank" class="btn-hero btn-hero2 hvr-bounce-to-right w-button w--current">Contact Us</a>
</div>



<?php include "../includes/CloseContainer.php" ?>

<?php include "../includes/footer.php" ?>