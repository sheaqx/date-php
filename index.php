<?php

$destinationTime = new DateTime();
$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(16, 29);
echo "Destinatin Time :" . "<br>" . $destinationTime->format('M-d-Y g:i a') . "<br>";

$presentTime = new DateTime();
echo "Present time :" . "<br>" . $presentTime->format('M-d-Y g:i a') . "<br>";

$diffDate = $presentTime->diff($destinationTime);
echo "Time between the destination and present day :" . "<br>" . $diffDate->format('%m months %d days %Y years');
