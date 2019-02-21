<?php 

class Car {
    
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 2;
    
        
        function showProperty(){
            echo $this->engine;
        }
    
}

$bmw = new Car();
$semi = new Semi();



?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "class_access.php" page.</h1><br>


<?php 
class Semi  extends Car {
}

echo $bmw->showProperty();
// echo ($bmw->showProperty()) . " hood";
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