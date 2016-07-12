<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function from(DateTime $date){
	$birthdayDate = $date->modify('+1000000000 second');

	return $birthdayDate;
}
