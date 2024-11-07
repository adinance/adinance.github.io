<?php
require_once("ICS.php");
$event = new ICS("2009-11-06 09:00","2009-11-06 21:00","Test Event","This is an event made by Jamie Bicknell","GU1 1AA");
$event->show();
?>