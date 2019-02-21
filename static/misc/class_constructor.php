<?php 

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine =1;
    var $doors = 2;
    
    function __construct(){
       echo ($this->wheels = 10) . "<br>";
    }
}


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>

<h1>This is the "class_constructor.php" page.</h1><br>



<?php 
  
$bmw = new Car();
$truck = new Car();
$semi = new Car();
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