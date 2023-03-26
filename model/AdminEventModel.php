<?php

class AdminEventModel
{
    public $eventList = "SELECT * FROM Event";

    public $createEvent = "INSERT INTO Event (eventName, host, address, description, start, end, date)
                          VALUE (:eventName, :host, :address, :description, :start, :end, :date )";

}

$AdminEventModel = new AdminEventModel();