<?php
$date = $_POST['date'];
$summ = $_POST['summ'];
$term = $_POST['term'];
$contribution = $_POST['contribution'];
$summСontribution = $_POST['summСontribution'];
$summa = 0

if ($contribution = 'no') {
    $summСontribution = 0;
}

$summa = $summ + ($summ + $summСontribution)*$date(10%/365);

echo $summa;







?>