<?php include "../functions.php" ?>
<?php include "../includes/header.php" ?>
<?php include "functions.php" ?>

                    <div>
                        <div id="Section-2" class="mainsection--about dark--about">
                        </div>
                    </div>
                        <?php
 
 if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
        // Create connection
    $IP = "0.0.0.0";
    $C9_USER = "charlesderek";
    $connection =mysqli_connect($IP, $C9_USER, "", "loginapp");
    
        if($connection){
            echo "<div class='div-block-24'><h1 class='heading-2'>Hello!</h1>"."<p class='paragraph-small'>"."Nice to meet you <b>".$username."!</b><br>You have successfully connected to the MySQL Database!<br></div>";
        } 
    
}

?>

                    <div>
                        <div id="Section-3" class="example bluebackground">
                            <div class="example-body minheight perspective--bottom">
                                <div data-ix="responsive-image-open" class="responsiveimageopen"><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706072e55693a08_xblock-04-mobile.png.pagespeed.ic.MgMyu72UCJ.png" class="mobileimg"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706075ab8693a0a_xblock-04-pop-a.png.pagespeed.ic.puMUe5-2nw.png" class="_3dimagelayer-1a"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706078ea8693a0c_xblock-04-desktop.png.pagespeed.ic.biPhfTfniS.png" width="307" class="desktopimg"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706071013693a10_xblock-04-pop-b.png.pagespeed.ic.8XtDQ9QcmM_1.png" class="_3dimagelayer-2b"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706072808693a0e_xblock-04-pop-c.png.pagespeed.ic.aMGEKfPoYo_1.png" class="_3dimagelayer-2c"/></div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div>
                        <div id="Section-3" class="example bluebackground">
                            <div id="FormBlockGetInTouch" class="form-block-2 w-form">
                                <form action="login.php" method="post" id="wf-form-Services-Inquiry-Form" name="wf-form-Services-Inquiry-Form" data-name="Services Inquiry Form" class="form-3 w-clearfix">
                                    <h1 id="Form" data-ix="introfade" class="formnewrequest">Welcome Back!</h1>
                                    <label for="username" class="field-label-6">Username:</label>
                                    <input type="text" class="name w-input" maxlength="256" name="username" data-name="username" placeholder="Please enter your username" id="username" required=""/><label for="Email-3" class="field-label-6">Password:</label><input type="Password" class="name w-input" maxlength="256" value="password" name="password" data-name="password" placeholder="" id="password" required="true"/>
                                    
                                    
                                    <div class="w-radio"><input type="radio" checked="checked" id="radio" name="radio" value="Radio" data-name="Radio" required="" class="radiobutton w-radio-input"/><label for="radio" class="terms w-form-label">I understand and agree to the MRGI USA
                                            <a href="#" class="link-13">Terms &amp; Services</a>
                                            and
                                            <a href="#" class="link-13">Privacy Policy</a> before proceeding.
                                        </label>
                                    </div><input type="submit" name="submit" value="Submit" placeholder="Login" data-wait="processing your inquiry..." class="submit-button-4 formsubmit w-button"/><div class="div-block-40"></div>
                                </form>
                                <br>
                                <div class="container">
                                    <a href="/users/login_create.php" class="button3neon w-button">New User?</a><br>
                                    <a href="/users/login_update.php" class="button3neon w-button">Update User?</a><br>
                                    <a href="/users/login_delete.php" class="button3neon w-button">Destroy User?</a><br>
                                </div>
                                <br>
                                <div class="success-message-2 w-form-done">
                                    <div>
                                        <strong>Your Inquiry has been received, thank you! We will follow up with a response as soon as possible.</strong>
                                    </div>
                                </div>
                                <div class="error-message w-form-fail">
                                    <div>
                                        <strong>Oops! Something went wrong while sending your request. Please Try again in a few minutes.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-3">
                        <div class="container-2">
                            <div class="div-block-16 w-clearfix">
                                <div class="w-clearfix">
                                    <h1 class="heading-8">Download the app via SMS</h1>
                                </div>
                                <div class="div-block-18">
                                    <div class="div-block-17">
                                        <div class="text-block-3">Enter your Phone</div>
                                    </div>
                                    <a href="#" class="button button-d w-button">Button Text</a>
                                </div>
                            </div>
                        </div>
                    </div>

<?php include "../includes/footer.php" ?>