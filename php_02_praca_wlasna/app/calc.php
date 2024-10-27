<?php
require_once dirname(__FILE__) . "/../config.php";

include _ROOT_PATH . "/app/security/check.php";

function getParams(&$amount, &$period, &$rate) {
    $amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
    $period = isset($_REQUEST ['period']) ? $_REQUEST ['period'] : null;
    $rate = isset($_REQUEST ['rate']) ? $_REQUEST ['rate'] : null;
}

function validate($amount, $period, $rate, &$messages)
{
    if (!(isset($amount) && isset($period) && isset($rate))) { // to wystąpi gdy kontroler zostanie wywołany bezpośrednio nie z formularza, tutaj to możliwe więc nie wywalamy błędu
        return false;
    }

    if ($amount == "") {
        $messages [] = "Nie podano kwoty kredytu.";
    }
    if ($period == "") {
        $messages [] = "Nie podano okresu trwania kredytu.";
    }

    if ($rate == "") {
        $messages [] = "Nie podano oprocentowania kredytu.";
    }

    if (count($messages) != 0) return false;

    if (!is_numeric($amount)) {
        $messages[] = "Kwota nie jest liczbą.";
    }
    if (!is_numeric($period)) {
        $messages[] = "Okres nie jest liczbą całkowitą.";
    }
    if (!is_numeric($rate)) {
        $messages[] = "Oprocentowanie nie jest liczbą całkowitą.";
    }
    if ($period > 15 || $period < 1) {
        $messages[] = "Okres musi być w przedziale od 1 do 15 lat.";
    }
    if ($rate > 20 || $rate < 5) {
        $messages[] = "Kredyt musi być oprocentowany w przedziale od 5% do 20%.";
    }
    if ($amount < 0) {
        $messages[] = "Kwota kredytu nie może być mniejsza od 0.";
    }
    if (count($messages) != 0) return false;
    else return true;


}
function process($amount, $period, $rate, &$result, &$messages){
    global $role;

    $amount = intval($amount);
    $period = intval($period);
    $rate = intval($rate);
    if ($amount > 10000){
        if ($role == 'manager'){
            $result = ($amount + ($amount * $rate / 100)) / ($period * 12);
        }
        else {
            $messages[] = "Tylko menadżer banku może wyliczać kredyt na więcej niż 10000zł";
        }
    }
    else{
        $result = ($amount + ($amount * $rate / 100)) / ($period * 12);
    }

    if ($rate < 10){
        if ($role == 'manager'){
            $result = ($amount + ($amount * $rate / 100)) / ($period * 12);
        }
        else {
            $messages[] = "Tylko menadżer banku może wyliczać kredyt na oprocentowaniu mniejszym niż 10%";
        }
    }
    else{
        $result = ($amount + ($amount * $rate / 100)) / ($period * 12);
    }

}

$amount = null;
$period = null;
$rate = null;
$result = null;
$messages = [];

getParams($amount, $period, $rate);
if ( validate ($amount, $period, $rate, $messages) ) {
    process($amount, $period, $rate, $result, $messages);
}

include 'calc_view.php';