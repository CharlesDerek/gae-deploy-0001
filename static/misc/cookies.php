<?php 

$name = "SomeName";
$value = 100;
$expiration = time() + ((60*60)*24*7);


setcookie($name, $value, $expiration);


?>
<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>

<?php include "../includes/OpenContainer.php" ?>


<h1>This is the "cookies.php" page.</h1>


<?php
    if (isset($_COOKIE["SomeName"])){
        $someOne = $_COOKIE["SomeName"];
        echo "Your cookies value is :".$someOne."<br> Your Cookie will be stored for ". ((60*60)*24*7)/((60*60)*24) ." Days.";
    }
    else {
        $someOne = "";
    }
?>

<div margin="15px">
    <br><a href="/9.php" class="btn-hero w-button">Back to section 9</a><a href="/" target="_blank" class="btn-hero btn-hero2 hvr-bounce-to-right w-button w--current">Contact Us</a>
</div>



<?php include "../includes/CloseContainer.php" ?>

<?php include "../includes/footer.php" ?>