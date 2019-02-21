<?php 

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine =1;
    var $doors = 2;
    
    function MoveWheels(){
        $this->wheels = 10;
    }
    function CreateDoors(){
        $this->doors = 6;
    }
}

$bmw = new Car();
$truck = new Car();


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "class_car.php" page.</h1><br>


<?php 
  
   $bmw->MoveWheels();
    // $bmw->wheels = 8;
    echo $bmw->wheels . "<br>";
    
    echo $truck->CreateDoors();
    echo $truck->doors;
  
if (method_exists("Car", "MoveWheels")) {
    echo "<h1> Holly Sweet Jesus the ,Method exsist too!</h1>";
} else {
    echo "<h1>It seems we had no luck.. this method doen't either and ran away...</h1>";
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