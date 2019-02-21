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


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "class_Inheritance.php" page.</h1><br>


<?php 
  class plane extends Car {
      var $wheels = 20;
  }
//   if(class_exists("Plane")) {
//       echo "Yes class 'Plane' Exists";
//   }


$jet = new Plane();
// $jet->MoveWheels();
echo ($jet->wheels) . " wheels are on the Jet.";
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