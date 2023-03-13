<?php

class ContactModel
{
    public $sentMail = "INSERT INTO Mail ( firstName, lastName, email, mailSubject, message) VALUES ( :firstName, :lastName, :email, :mailSubject, :message)";

    public $showMails = "SELECT * FROM Mail";
}
$ContactModel = new ContactModel();