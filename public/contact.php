<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Contact Us
                    <center><p><small>We'd love to hear from you!</small></p></center></h1>
                    <h3 class="section-subheading ">
                        <?php display_message(); ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" >

                        <?php send_message(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Your Subject *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!--
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="submit" type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                            -->

                            <div class="form-group text-center">
                              <input type="submit" name="Send Message" class="btn btn-primary">
                            </div>






                        </div>
                    </form>
                </div>
            </div>


             <h1><center>Our store locations</center></h1>

                    <br>
                    <br>

                    <h4><center>1271 W El Camino Real, Sunnyvale, CA 94086</center></h4>

                    <br>
                    <br>

                    <h4><center>101 S Delaware St, San Mateo, CA 94401</center></h4>

                    <br>
                    <br>

                    <h1><center>Visit Us</center></h1>

                    <center><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1xBWCkOYPBXEs8IjWx8XXSrqhWm4" width="640" height="480"></iframe></center>
        </div>



    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>