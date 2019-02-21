<?php

        // Create connection
    $IP = "0.0.0.0";
    $C9_USER = "charlesderek";
    $connection =mysqli_connect($IP, $C9_USER, "", "loginapp");
    
        if($connection){
            
        } else {
            die("<p>Database connection has seemed to fail. Something went wrong while sending your request. Please Try again in a few minutes. If the issue continues to occur <a href='mailto:Contact@mrginnovations.com?subject=Hello%20MRGI%20Team!%20&body=Hello%20MRGI%20USA%20Support%20Team!%20I%20seem%20to%20be%20having%20trouble%20with%20my%20connection%20(with%20error%20code%20%23DB1732).%20Please%20fix%20the%20issue%20so%20i%20can%20login!%20Thank%20you%20very%20much,%20and%20have%20a%20great%20day!'>please let us know!</a></p>");
        }
  
?>