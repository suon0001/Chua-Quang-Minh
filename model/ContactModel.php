<?php

class ContactModel
{
    public $sentMail = "INSERT INTO Mail ( firstName, lastName, email, mailSubject, message, timestamp) VALUES ( :firstName, :lastName, :email, :mailSubject, :message, CURRENT_TIMESTAMP)";

    public $showMails = "SELECT * FROM Mail";

    public $deleteMail = "DELETE FROM Mail WHERE mailID = :mailID";
}
$ContactModel = new ContactModel();