<?php

$presentTime = new DateTime;
echo $presentTime->format('M d Y A h:i')."<br/>";

$destinationTime =(new DateTime)->setDate(2050,07,03)->setTime(22,20);
echo $destinationTime->format('M d Y A h:i'). "<br/>";


$timeUntilDestinationTime = $presentTime->diff($destinationTime);
echo $timeUntilDestinationTime->format('%Y years %m months %d days %H hours and %i minutes')."<br/>";

$garbagePerDay = 0.5;
$totalgarbage = $garbagePerDay * $timeUntilDestinationTime->days;
echo "total garbage ".$totalgarbage ."kg";







