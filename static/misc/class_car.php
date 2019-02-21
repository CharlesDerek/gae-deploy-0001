<?php 

class Car {
    
}

?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "class_car.php" page.</h1><br>


<?php
  
if (class_exists("Car")) {
    echo "<h1> Holly Sweet Jesus the class exsist!</h1>";
} else {
    echo "<h1>It seems we had no luck.. this class ran away...</h1>";
}
?>

<div margin="15px">
    <br><a href="/10.php" class="btn-hero w-button">Back to section 10</a>
</div>


<br>

<div class="container">
    <p>
        ..to be continued.
    </p>
</div>


		<?php CurrentLecture(); ?>
<?php include "../includes/CloseContainer.php" ?>

<?php include "../includes/footer.php" ?>