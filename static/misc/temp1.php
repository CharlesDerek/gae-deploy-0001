

<?php 




    if (isset($_POST['submit'])) {
        $plan = $_POST['Plan'];
        $secretKey = "6Ldxb24UAAAAAKestc8t-UjRR359dOdJDDjI6WsQ";
        $responseKey = $_POST['g-recaptcha-response'];
        $userIP = $_SERVER['REMOTE_ADDR'];
        
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = JSON_decode($response);
        
        if ($response->success) {
            echo "<h3><em>Your request has been verified by reCAPTCHA</em></h3>";
        } else {
            echo "<h3><em>Your request has been denied by reCAPTCHA</em></h3>";
        }
    }
?>

                    <div class="topmerge-purple"></div>
                    <div class="sectionconnecthead sectionconnectadjust">
                        <div class="container">
                            <h1 class="heading">This is the "Add_Post" page</h1>
                            <h1><?php
                                        
                                        echo "<h1>".$response."</h1>";
                                        if ($response->success) {
                                            echo "<h1>reCAPTCHA verification was good</h1>".$response."</h1>"; 
                                        } else {
                                            echo "<h1>".$response."</h1>"; 
                                        }
                                    ?></h1>
                            <p class="paragraph">We Are An Integrated Design And Development Development Team. We&#x27;re Focused On Unconventional Innovation In Software Technology.
                            </p>
                            <div class="button-wrap">
                                <a href="/1.php" class="btn-hero w-button">Get Started</a>
                                <a href="https://webflow.com/?rfsn=1238427.48b8d" target="_blank" class="btn-hero btn-hero2 hvr-bounce-to-right w-button">Gallery</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="Section-2" class="mainsection--about dark--about">
                            <div class="sectionheader--about">
                                <a href="#" data-ix="arrow-appear" class="go-down-link paddingfixforarrow w-inline-block"><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7c8e77ac90f3573e630947_white-down-arrow-png-2%5B1%5D.png" width="50" data-ix="arrowhovereffect"/></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="Section-3" class="example bluebackground">
                            <div class="example-body minheight perspective--bottom">
                                <div data-ix="responsive-image-open" class="responsiveimageopen"><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706072e55693a08_xblock-04-mobile.png.pagespeed.ic.MgMyu72UCJ.png" class="mobileimg"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706075ab8693a0a_xblock-04-pop-a.png.pagespeed.ic.puMUe5-2nw.png" class="_3dimagelayer-1a"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706078ea8693a0c_xblock-04-desktop.png.pagespeed.ic.biPhfTfniS.png" width="307" class="desktopimg"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706071013693a10_xblock-04-pop-b.png.pagespeed.ic.8XtDQ9QcmM_1.png" class="_3dimagelayer-2b"/><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7d961e9706072808693a0e_xblock-04-pop-c.png.pagespeed.ic.aMGEKfPoYo_1.png" class="_3dimagelayer-2c"/></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="Section-3" class="example bluebackground planssection">
                            <div class="example-body minheight perspective--bottom adjustmobile3dheight">
                                <div data-ix="example-header-appear" class="example-header--about w-container">
                                    <a href="#Section-5Plans" data-ix="arrow-appear" class="go-down-link w-hidden-small w-hidden-tiny w-inline-block"><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7c8e77ac90f3573e630947_white-down-arrow-png-2%5B1%5D.png" width="50" data-ix="arrowhovereffect"/></a>
                                    <h5 class="example-subtitle--about connectmargintop">We start with your customers then work backwards, to offer them the best User experience. by creating Innovative applications, Our clients can SEAMLESSLY accomplish any of their business profession needs.</h5>
                                    <a href="#Style-It" data-ix="arrow-appear" class="go-down-link-mobile w-hidden-main w-hidden-medium w-inline-block"><img src="https://uploads-ssl.webflow.com/5b7c8e0ed7ae794bb9f49a4b/5b7c8e77ac90f3573e630947_white-down-arrow-png-2%5B1%5D.png" width="50" data-ix="arrowhovereffect"/></a>
                                    <h1 id="Style-It" class="example-title">Our Plans</h1>
                                </div>
                                <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                                    <div class="w-tab-menu">
                                        <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link">
                                            <div>
                                                <strong class="bold-text-2">File It</strong>
                                            </div>
                                        </a>
                                        <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link w--current">
                                            <div>
                                                <strong class="bold-text-3">Style It</strong>
                                            </div>
                                        </a>
                                        <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                                            <div>
                                                <strong class="bold-text-4">The Ultimate</strong>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-tab-content">
                                        <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                                            <div class="taborganizerdiv">
                                                <h2 class="pricingcolumnsh1">File It</h2>
                                                <ul class="unordered-list w-list-unstyled">
                                                    <li class="ourplanslisteditems">design and build Static Application</li>
                                                    <li class="ourplanslisteditems">Discovery Session</li>
                                                    <li class="ourplanslisteditems">Definition Packet</li>
                                                    <li class="ourplanslisteditems">Wireframes</li>
                                                    <li class="ourplanslisteditems">24 Hours of Design Work</li>
                                                    <li class="ourplanslisteditems">Additional Design Work, $125.00 Per Hour</li>
                                                    <li class="ourplanslisteditems">Weekly updates (Skype)</li>
                                                    <li class="ourplanslisteditems">Delivery Packet - Style Guide + Screens</li>
                                                    <li class="ourplanslisteditems">$500 Initial deposit</li>
                                                </ul>
                                                <h3 class="recomendh1">
                                                    <em>Recommended for budgets ranging between $1,000- $10,000</em>
                                                </h3>
                                                <div class="recomendedfor"></div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 2" class="w-tab-pane">
                                            <div class="taborganizerdiv">
                                                <h2 class="pricingcolumnsh1">Style It</h2>
                                                <ul class="w-list-unstyled">
                                                    <li class="ourplanslisteditems">Design And Build Dynamic Application</li>
                                                    <li class="ourplanslisteditems">Product GO-3D modeling</li>
                                                    <li class="ourplanslisteditems">Information Architecture</li>
                                                    <li class="ourplanslisteditems">Wireframes</li>
                                                    <li class="ourplanslisteditems">40+ Hours of Design Work</li>
                                                    <li class="ourplanslisteditems">Additional Design Work, $100.00 Per Hour</li>
                                                    <li class="ourplanslisteditemslonger ourplanssmallfix">Weekly Meeting (skype)+ Daily Updates + text/email updates</li>
                                                    <li class="ourplanslisteditemslonger ourplanssmallfix">Marketing Packet - Conversion based design Overview</li>
                                                    <li class="ourplanslisteditemslonger">Entailed Packet - Style Guide + Screens + Conversion Data</li>
                                                    <li class="ourplanslisteditems">1-3 Prototypes</li>
                                                    <li class="ourplanslisteditems">Integrated conversion &amp; sales metrics</li>
                                                    <li class="ourplanslisteditems">2 maximum project platforms</li>
                                                    <li class="ourplanslisteditems">15 percent Initial deposit</li>
                                                </ul>
                                                <h3 class="recomendh1">
                                                    <em>Recommended for budgets ranging between $15,000- $100,000</em>
                                                </h3>
                                                <div class="recomendedfor"></div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 3" class="w-tab-pane">
                                            <div class="taborganizerdiv">
                                                <h2 class="pricingcolumnsh1">The Ultimate</h2>
                                                <ul class="w-list-unstyled">
                                                    <li class="ourplanslisteditemslonger">Design Static and Application Software Including sites</li>
                                                    <li class="ourplanslisteditems">Product GO-3D modeling</li>
                                                    <li class="ourplanslisteditems">Information Architecture</li>
                                                    <li class="ourplanslisteditems">Wireframes w/ UX Lead</li>
                                                    <li class="ourplanslisteditems">100+ Hours of Design Work</li>
                                                    <li class="ourplanslisteditems">Additional Design Work, $80.00 Per Hour</li>
                                                    <li class="ourplanslisteditemslonger ourplanssmallfix">Weekly Meeting (optional Medium) + Daily Updates + Text /email Updates</li>
                                                    <li class="ourplanslisteditemslonger">Marketing Packet - Conversion based design</li>
                                                    <li class="ourplanslisteditemslonger">
                                                        Marketing Packet Plus (SEO &amp; SEM) Guided Set Up</li>
                                                    <li class="ourplanslisteditems">Conversion Sales funnel Metrics</li>
                                                    <li class="ourplanslisteditems">continuous Prototypes</li>
                                                    <li class="ourplanslisteditems">Integrated conversion &amp; sales metrics</li>
                                                    <li class="ourplanslisteditems">Market research analysis packet</li>
                                                    <li class="ourplanslisteditems">financial bookkeeping database</li>
                                                    <li class="ourplanslisteditemslonger ourplanssmallfix">Artificial Intelligence support Messenger Packet</li>
                                                    <li class="ourplanslisteditems">All project platforms <em>(Desktop, Mobile, and Web)</em></li>
                                                    <li class="ourplanslisteditems">10 percent Initial deposit</li>
                                                </ul>
                                                <h3 class="recomendh1">
                                                    <em>Recommended for budgets above $100,000 on multiple platforms.</em>
                                                </h3>
                                                <div class="recomendedfor"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="Section-3" class="example bluebackground">
                            <div id="FormBlockGetInTouch" class="form-block-2 w-form">
                                <form id="wf-form-Services-Inquiry-Form" name="wf-form-Services-Inquiry-Form" data-name="Services Inquiry Form" class="form-3 w-clearfix">
                                    <h1 id="Form" class="formnewrequest">New Project Request:</h1>
                                    
                                        <label for="Plan" class="field-label-6">Project Plan:</label>
                                        <select id="Plan" name="Plan" data-name="Plan" required="true" class="selecttor-estimated-budget w-select">
                                            <option value="0">Please select desired plan.</option>
                                            <option value="File It">File It - Budgets less than $15,000</option>
                                            <option value="Style It">Style It - $15,000 - $100,000 budget</option>
                                            <option value="The Ultimate">The Ultimate - Budgets above $100,000 on multiple platforms</option>
                                            <option value="Gold">Gold Membership $250,000 +</option>
                                        </select>
                                        <label for="Name" class="field-label-6">Post Title:</label><input type="text" class="name w-input" maxlength="256" name="Name" data-name="Name"  id="Name" required=""/>
                                        <label for="Name" class="field-label-6">Author:</label><input type="text" class="name w-input" maxlength="256" name="Name" data-name="Name" placeholder="Please enter your full name" id="Name" required=""/>
                                        
                                        <label for="Plan" class="field-label-6">Post Status</label>
                                        <select id="Plan" name="Plan" data-name="Plan" required="true" class="selecttor-estimated-budget w-select">
                                            <option value="0">Please Select a Post Status</option>
                                            <option value="File It">Happy</option>
                                            <option value="Style It">Annoid</option>
                                            <option value="The Ultimate">Not Annoid</option>
                                        </select>
                                        <label for="Email-3" class="field-label-6">Mobile:</label><input type="text" class="name w-input" maxlength="256" name="Name-4" data-name="Name 4" placeholder="Please enter your Cell number" id="Name-4" required=""/><label for="Email-3" class="field-label-6">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="Email-3" data-name="Email 3" placeholder="Enter your email" id="Email-3" required=""/><label for="Project-Budget" class="field-label-6">Project Type(s) Involved:</label>
                                        <div class="get-in-touch-form-checkbox w-row">
                                            <div class="w-col w-col-6">
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="Dynamic-Web-Application" name="Dynamic-Web-Application" data-name="Dynamic Web Application" class="newcheckbx w-checkbox-input"/><label for="Dynamic-Web-Application" class="field-label-6 w-form-label">Dynamic Web Application</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="Static-Web-Design" name="Static-Web-Design" data-name="Static Web Design" class="newcheckbx w-checkbox-input"/><label for="Static-Web-Design" class="field-label-6 w-form-label">Static Web Design</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="IOS-Swift-Application" name="IOS-Swift-Application" data-name="IOS Swift Application" class="newcheckbx w-checkbox-input"/><label for="IOS-Swift-Application" class="field-label-6 w-form-label">IOS / Swift Application</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="Google-Play-Android-Application" name="Google-Play-Android-Application" data-name="Google Play Android Application" class="newcheckbx w-checkbox-input"/><label for="Google-Play-Android-Application" class="field-label-6 w-form-label">Google Play / Android Application</label>
                                                </div>
                                            </div>
                                            <div class="w-col w-col-6">
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="SharePoint" name="SharePoint" data-name="Share Point" class="newcheckbx w-checkbox-input"/><label for="SharePoint" class="w-form-label">SharePoint</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="Desktop Application" name="Desktop-Application" data-name="Desktop Application" class="newcheckbx w-checkbox-input"/><label for="Desktop Application" class="w-form-label">PC Software (Apple/Windows)</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="UI-UX" name="UI-UX" data-name="UI UX" class="newcheckbx w-checkbox-input"/><label for="UI-UX" class="w-form-label">UI / UX</label>
                                                </div>
                                                <div class="getintouchcheckbox w-checkbox"><input type="checkbox" id="Drupal-Wordpress-CMS" name="Drupal-Wordpress-CMS" data-name="Drupal Wordpress CMS" class="newcheckbx w-checkbox-input"/><label for="Drupal-Wordpress-CMS" class="w-form-label">Drupal / Wordpress CMS</label>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="Website" class="field-label-6">Website(s) (if applicable to your inquiry):</label><input type="text" class="name w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="www.Example.com, www.Example2.com" id="Name-3" required=""/><label for="Company" class="field-label-6">Company Involved in project name:</label><input type="text" class="text-field-2 w-input" maxlength="256" name="Company" data-name="Company" placeholder="JohnDoe&#x27;s Inc" id="Company" required=""/>
                                        <label for="Additional-Notes" class="field-label-6">Post Image</label>
                                        <label for="Additional-Notes" class="field-label-6">Post Content</label>
                                        <textarea id="Additional-Notes" name="Additional-Notes" maxlength="5000" required="" placeholder="Greetings, the project needs to meet specific mobile..." data-name="Additional Notes" class="text-field-2 talkbox w-input"></textarea>
                                        <div class="w-radio"><input type="radio" id="radio" name="radio" value="Radio" data-name="Radio" required="true" checked="checked" class="radiobutton w-radio-input"/><label for="radio" class="terms w-form-label">I understand and agree to the MRGI USA
                                                <a href="#" class="link-13">Terms &amp; Services</a>
                                                and
                                                <a href="#" class="link-13">Privacy Policy</a>
                                            </label>
                                    </div><input type="submit" value="Submit" name="submit" data-wait="processing your inquiry..." class="submit-button-4 formsubmit w-button"/><div class="div-block-40"></div>
                                    <div class="container">
                                        <div class="g-recaptcha" data-sitekey="<?php echo "6Ldxb24UAAAAAEW7NhX4wWPq_5doDd5hwtLqwPAV"?>"></div>
                                    </div>
                                </form>
                                <div class="success-message-2 w-form-done">
                                    <div>
                                        <strong>Your Inquiry has been received, thank you! We will follow up with a response as soon as possible.</strong>
                                    </div>
                                </div>
                                <div class="error-message w-form-fail">
                                    <div>
                                        <strong>Oops! Something went wrong while submitting the form.</strong>
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