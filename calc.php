<?php
$date = $_POST['date'];
$summ = $_POST['user_summ'];
$term = $_POST['term'];
$contribution = $_POST['contribution'];
$summСontribution = $_POST['summСontribution'];


if ($contribution == 'no') {
    $summСontribution = 0;
}

$date = $date.str_split('.');
$allDays = array(31, 28, 31, 30, 31, 30, 31, 31, 30,31, 30, 31);

$day = intval($date[0]);
$month = intval($date[1] - 1);
$year = intval($date[2]);

$totalDay = $allDays[$month] - $day;


$summa = $summ + ($summ + $summСontribution)*$totalDay*(0.1/365);


$summa = $summa * $term;




echo json_encode($summa);




?>