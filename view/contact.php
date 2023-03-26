<?php
require("rootPath.php");

require $rootPath . "model/ContactModel.php";
require $rootPath . "controller/ContactController.php";

?>


<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
    </div>
</div>

<div class="contact__wrapper shadow-lg mt-n9">
    <div class="row no-gutters">
        <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
            <h3 class="color--white mb-5">Get in Touch</h3>

            <ul class="contact-info__list list-style--none position-relative z-index-101">
                <li class="mb-4 pl-4">
                    <span class="position-absolute"><i class="fas fa-envelope"></i></span> <a
                            href="mailto:email@email.com" class="text-muted link-white">email@email.com</a>
                </li>
                <li class="mb-4 pl-4">
                    <span class="position-absolute"><i class="fas fa-phone"></i></span> (021)-241454-545
                </li>
                <li class="mb-4 pl-4">
                    <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> bootdey Technologies
                    Inc.
                    <br> 2694 Queen City Rainbow Drive
                    <br> Florida 99161

                    <div class="mt-3">
                        <a href="https://www.google.com/maps" target="_blank"
                           class="text-link link--right-icon text-white">Get directions <i
                                    class="link__icon fa fa-directions"></i></a>
                    </div>
                </li>
            </ul>

            <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px"
                     height="626px">
                    <defs>
                        <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                            <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </figure>
        </div>

        <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
            <form action="#" method="post" class="contact-form form-validate" novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label class="required-field" for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Wendy">
                        </div>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                   placeholder="Appleseed">
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label class="required-field" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                   placeholder="wendy.apple@seed.com">
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label class="required-field" for="message">Subject</label>
                            <input class="form-control" id="message" name="mailSubject"
                                   placeholder="What is the problem....."></input>
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label class="required-field" for="message">How can we help?</label>
                            <textarea class="form-control" id="message" name="message" rows="4"
                                      placeholder="Hi there, I would like to....."></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3">
                        <button type="submit" name="send_email" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<style>
    <?php include 'styles/index.css'; ?>
</style>