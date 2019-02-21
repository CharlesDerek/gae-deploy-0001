<?php 

class Car {
    
    static $wheels = 4;
    var $hood = 1;
    
    function MoveWheels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();

//$bmw->wheels;


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "class_static.php" page.</h1><br>


<?php 
    Car::MoveWheels();
    
    echo Car::$wheels;
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