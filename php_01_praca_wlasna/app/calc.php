<?php
require_once dirname(__FILE__) . "/../config.php";

$amount = $_REQUEST ['amount'];
$period = $_REQUEST ['period'];
$rate = $_REQUEST ['rate'];

if (!(isset($amount) && isset($period) && isset($rate))) {
    $messages [] = "Błędne wywołanie aplikacji.";
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

if (empty($messages)) {
    if (!is_numeric($amount)) {
        $messages[] = "Kwota nie jest liczbą.";
    }
    if (!is_numeric($period)) {
        $messages[] = "Okres nie jest liczbą całkowitą.";
    }
    if (!is_numeric($rate)) {
        $messages[] = "Oprocentowanie nie jest liczbą całkowitą.";
    }

    if (empty($messages)) {
        $amount = intval($amount);
        $period = intval($period);
        $rate = intval($rate);

        if ($period > 15 || $period < 1) {
            $messages[] = "Okres musi być w przedziale od 1 do 15 lat.";
        }
        if ($rate > 20 || $rate < 5) {
            $messages[] = "Kredyt musi być oprocentowany w przedziale od 5% do 20%.";
        }
        if (empty($messages)) {
            $result = ($amount + ($amount * $rate / 100)) / ($period * 12);
        }
    }
}

include 'calc_view.php';