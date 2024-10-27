<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParmas(&$amount, &$period, &$interest_rate){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $period = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
    $interest_rate = isset($_REQUEST['interest_rate']) ? $_REQUEST['interest_rate'] : null;
}

function validate(&$amount, &$period, &$interest_rate, &$messages){
    if(!(isset($amount) && isset($period) && isset($interest_rate))){
            return false;
    }

    if ( $amount == "") {
            $messages [] = 'Nie podano kwoty kredytu';
    }
    if ( $period == "") {
            $messages [] = 'Nie podano okresu spłacania kredytu';
    }
    if ( $interest_rate == "") {
            $messages [] = 'Nie podano oprocentowania kredytu';
    }

    if (count ( $messages ) != 0) return false;
    
    if (! (is_numeric($amount) && $amount>0)) {
            $messages [] = 'Kwota kredytu nie jest liczbą dodatnią';
    }
    
    if (! (is_numeric($period) && $period>0)) {
            $messages [] = 'Okres spłacania kredytu nie jest liczbą dodatnią';
    }
    
    if (! (is_numeric($interest_rate) && $interest_rate>0)) {
            $messages [] = 'Oprocentowanie nie jest liczbą dodatnią';       
    }
    
    if (count ( $messages ) != 0) return false;
    else return true;
}

function process(&$amount, &$period, &$interest_rate, &$messages, &$result){
        global $role;
        
	$amount = intval($amount);
	$period = intval($period);
        $interest_rate = floatval($interest_rate);
        
        if ($amount > 1000000 && $role !== "manager") {
        $messages[] = "Obliczenia dla kwoty powyżej 1 000 000 może przetworzyć tylko manager banku";
        $result = null;
        return;
        }

        $result = (($amount * $interest_rate)/ 100 + $amount) / ($period * 12);
}

$amount = null;
$period = null;
$interest_rate = null;
$result = null;
$messages = array();

getParmas($amount, $period, $interest_rate);
if(validate($amount, $period, $interest_rate, $messages)){
    process($amount, $period, $interest_rate, $messages, $result);
}
        
include 'calc_credit_view.php';
