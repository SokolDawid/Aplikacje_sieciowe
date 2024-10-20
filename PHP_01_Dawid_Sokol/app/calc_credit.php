<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST['amount'];
$period = $_REQUEST['period'];
$int_rate = $_REQUEST['interest_rate'];

if(!(isset($amount) && isset($period) && isset($int_rate))){
    $messages [] = 'Nie prawidłowe wypełnienie wartości kalkulatora';
}

if ( $amount == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $period == "") {
	$messages [] = 'Nie podano okresu spłacania kredytu';
}
if ( $int_rate == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}

if (empty( $messages )) {
	if (! (is_numeric($amount) && $amount>0)) {
		$messages [] = 'Kwota kredytu nie jest liczbą dodatnią';
	}
	if (! (is_numeric($period) && $period>0)) {
		$messages [] = 'Okres spłacania kredytu nie jest liczbą dodatnią';
	}
        if (! (is_numeric($int_rate) && $int_rate>0)) {
		$messages [] = 'Oprocentowanie nie jest liczbą dodatnią';
	}
}

if (empty ( $messages )) {
	$amount = intval($amount);
	$period = intval($period);
        $int_rate - intval($int_rate);
	
	$result = (($amount * $int_rate)/100 + $amount)/($period * 12);
}
include 'calc_credit_view.php';
