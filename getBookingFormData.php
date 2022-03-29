<?php

  require_once("booking.php");  //Tak mozna załączyć naszą klasę do tego pliku.

  if (isset($_POST) && !empty($_POST)) {    //Sprawdzamy czy formularz został wysłany
    
    $firstName = $_POST['Name'];
    $lastName = $_POST['LastName'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $adultNumber = $_POST['AdultNumber'];
    $childNumber = $_POST['ChildNumber'];
    $dateRange = $_POST['daterange'];

    $booking = new Booking($dateRange, $adultNumber, $childNumber, $firstName, $lastName, $email, $phone);
    $booking->showMessage();

  } 

  else {
    echo 'Niestety coś poszło nie tak... Prosimy spróbować później.';
  }
