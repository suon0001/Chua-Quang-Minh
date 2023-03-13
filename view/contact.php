<div class="container bootstrap snippets bootdeys">
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-th fa-3x text-colored"></i>
                <h4>Get In Touch</h4>
                <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                E: <a href="mailto:email@email.com" class="text-muted">email@email.com</a>
            </div>
        </div><!-- end col -->

        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-map-marker fa-3x text-colored"></i>
                <h4>Our Location</h4>

                <address>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                </address>
            </div>
        </div><!-- end col -->

        <div class="col-sm-4">
            <div class="contact-detail-box">
                <i class="fa fa-book fa-3x text-colored"></i>
                <h4>24x7 Support</h4>

                <p>Industry's standard dummy text.</p>
                <h4 class="text-muted">1234 567 890</h4>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-sm-6">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/dir/55.4961282,8.5034645/Ingemanns+Alle+47,+6700+Esbjerg/@55.4869451,8.4572384,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x464b26b5066b4d31:0x88c47c6e6cb4ee05!2m2!1d8.4799061!2d55.4617113" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width: 100%; height: 360px;"></iframe>
            </div>
        </div><!-- end col -->

        <!-- Contact form -->
        <div class="col-sm-6">
            <form role="form" name="ajax-form" id="ajax-form" action="https://formsubmit.io/send/coderthemes@gmail.com" method="post" class="form-main">

                <div class="form-group">
                    <label for="name2">Name</label>
                    <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                    <div class="error" id="err-name" style="display: none;">Please enter name</div>
                </div> <!-- /Form-name -->

                <div class="form-group">
                    <label for="email2">Email</label>
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div>
                </div> <!-- /Form-email -->

                <div class="form-group">
                    <label for="message2">Message</label>
                    <textarea class="form-control" id="message2" name="message" rows="5" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>

                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                </div> <!-- /col -->

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Submit</button>
                    </div> <!-- /col -->
                </div> <!-- /row -->

            </form> <!-- /form -->
        </div> <!-- end col -->

    </div> <!-- end row -->

</div>

<style>
    <?php include 'styles/index.css'; ?>
</style>