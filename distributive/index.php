<?php $date = strtotime("16 August 2019");
$currDate = strtotime("now");
if ($date > $currDate) {
	header('location: https://start.bizon365.ru/room/6538/exit_from_body');
}
else {
	header('location: https://razdorsky.mastervision.su/journey-of-soul/');
}
?>