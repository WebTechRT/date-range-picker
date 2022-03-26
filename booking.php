<?php

class Booking
{
	public $dateRange;
	// public $checkIn;
	// public $checkOut;
	public $adultNumber;
	public $childNumber;
	public $firstName;
	public $lastName;
	public $email;
	public $phoneNumber;

	public function __construct
	(
		$dateRange,
	 	// $checkIn,
	 	// $checkOut,
	 	$adultNumber,
	 	$childNumber,
	 	$firstName,
	 	$lastName,
	 	$email,
	 	$phoneNumber
	){
		$this->dateRange = $dateRange;
		$this->checkIn = $this->setCheckIn($dateRange);
		$this->checkOut = $this->setCheckOut($dateRange);
		$this->numberOfAdults = $adultNumber;
		$this->numberOfChild = $childNumber;
		$this->firstName = $firstName;
		$this->lastName =$lastName;
		$this->email = $email;
		$this->phoneNumber= $phoneNumber;
	}

	public function setCheckOut($dateRange)
	{
		return substr($dateRange, strpos($dateRange, "-") + 1); //zwraca dane po "-"
	}

	public function setCheckIn($dateRange)
	{
		return strtok($dateRange, '-'); // zwaraca dane przed "-"
	}

	public function showMessage()
	{
		// echo nl2br ("Pan " . $this->firstName ." ". $this->lastName . " rezerwuje apartament od ". $this->checkIn . " do " . $this->checkOut . "\n" );

	    // echo nl2br("Dane kontaktowe ". "\n");
	    // echo nl2br("Dzwonić pod nr: " . $this->phoneNumber . "\n" . "Faktury na adres email: " . $this->email. "\n");
	    echo $this->checkOut. "</br>" ;
	    echo $this->checkIn;
	}
} 
