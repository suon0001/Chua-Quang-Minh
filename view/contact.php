<?php
require("rootPath.php");

require $rootPath . "model/ContactModel.php";
require $rootPath . "controller/ContactController.php";

?>
<div class="container">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-th fa-3x text-colored"></i>
                <h4>Get In Touch</h4>
                <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                E: <a href="mailto:email@email.com" class="text-muted">email@email.com</a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-map-marker fa-3x text-colored"></i>
                <h4>Our Location</h4>

                <address>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                </address>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-book fa-3x text-colored"></i>
                <h4>24x7 Support</h4>

                <p>Industry's standard dummy text.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/dir/55.4961282,8.5034645/Ingemanns+Alle+47,+6700+Esbjerg/@55.4869451,8.4572384,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x464b26b5066b4d31:0x88c47c6e6cb4ee05!2m2!1d8.4799061!2d55.4617113"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        style="width: 100%; height: 360px;"></iframe>
            </div>
        </div>

        <div class="col-sm-6">
            <form action="#" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                               name="firstName">
                    </div>
                    <div class="col mb-3">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                               name="lastName">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject" aria-label="Subject"
                               name="mailSubject">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1"
                                  rows="4"></textarea>
                    </div>
                    <button name="send_email" type="submit" class="btn">Send Message</button>
                </div>
            </form>
        </div>


    </div>
</div>

<style>
    <?php include 'styles/index.css'; ?>
</style>