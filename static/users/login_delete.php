<?php include "../functions.php"; ?>
<?php include "../includes/header.php"; ?>

                    <div>
                        <div id="Section-2" class="mainsection--about dark--about">
                        </div>
<?php  
require('db.php');
require('functions.php');

if(isset($_POST['submit'])){
    deleteRows();
}

?>
                    </div>
                    <div>
                    </div>
                    <div>
                        <div id="Section-3" class="example bluebackground">
                            <div id="FormBlockGetInTouch" class="form-block-2 w-form">
                                <form action="login_delete.php" method="post" id="wf-form-Services-Inquiry-Form" name="wf-form-Services-Inquiry-Form" data-name="Services Inquiry Form" class="form-3 w-clearfix">
                                    <h1 id="Form" class="formnewrequest">Destroy information below.</h1>
                                    
                                    <label for="id" class="field-label-6">Project id:</label>
                                        <select id="" name="id" data-name="id" required="" class="selecttor-estimated-budget w-select">
                                            <option value="0">Please select estimated ID value.</option>
                                            <?php showAllData(); ?>
                                        </select>
                                    
                                    <div class="w-radio">
                                    </div><input type="submit" name="submit" value="DELETE" placeholder="Login" data-wait="processing your inquiry..." class="submit-button-4 formsubmit w-button"/><div class="div-block-40"></div>
                                </form>
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
<?php include "../includes/footer.php" ?>