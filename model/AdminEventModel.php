<?php

class AdminEventModel
{
    public $newsType = "SELECT * FROM NewsType";
    public $eventList = "SELECT * FROM Event";
    public $createEvent = "INSERT INTO Event (eventName, host, address, start_time, date_start, date_end, pdf_file, newsTypeID)
                          VALUE (:eventName, :host, :address, :start_time, :date_start, :date_end, :pdf_file, :newsTypeID )";
}
$AdminEventModel = new AdminEventModel();
