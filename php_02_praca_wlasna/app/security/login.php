<?php

require_once dirname(__FILE__) . "/../../config.php";

function getLoginParams(&$form){
    $form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
    $form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

function validateLogin(&$form, &$messages){
    if ( !(isset($form['login']) && isset($form['pass']))) {
        return false;
    }

    if ( $form['login'] == "") {
        $messages [] = 'Nie podano loginu';
    }
    if ( $form['pass'] == "") {
        $messages [] = 'Nie podano hasła';
    }

    if (count ( $messages ) > 0) return false;

    if ($form['login'] == "manager" && $form['pass'] == "manager") {
        session_start();
        $_SESSION['role'] = 'manager';
        return true;
    }
    if ($form['login'] == "klient" && $form['pass'] == "klient") {
        session_start();
        $_SESSION['role'] = 'klient';
        return true;
    }

    $messages [] = 'Niepoprawny login lub hasło';
    return false;
}

$form = array();
$messages = array();
getLoginParams($form);

if (!validateLogin($form,$messages)) {
    include _ROOT_PATH . '/app/security/login_view.php'; // to jest po to zeby pokazac bledy z messages
}
else {
    header("Location: "._APP_URL); // przekierowanie na strone kalkulator jak login i haslo ok
}