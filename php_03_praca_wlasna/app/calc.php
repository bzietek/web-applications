<?php
require_once dirname(__FILE__) . "/../config.php";

require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParams(&$form) {
    $form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['period'] = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
    $form['rate'] = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;	
}

function validate(&$form,&$infos,&$msgs,&$hide_intro)
{
    if (!(isset($form['amount']) && isset($form['period']) && isset($form['rate']))) { // to wystąpi gdy kontroler zostanie wywołany bezpośrednio nie z formularza, tutaj to możliwe więc nie wywalamy błędu
        return false;
    }

    $hide_intro = true; // zeby jak sa obliczenia nie trzeba bylo przewijac
    $infos [] = 'Przekazano parametry.';

    if (!$form['amount']) {
        $msgs [] = "Nie podano kwoty kredytu.";
    }
    if (!$form['period']) {
        $msgs [] = "Nie podano okresu trwania kredytu.";
    }

    if (!$form['rate']) {
        $msgs [] = "Nie podano oprocentowania kredytu.";
    }

    if (count($msgs) != 0) return false;

    if (!is_numeric($form['amount'])) {
        $msgs[] = "Kwota nie jest liczbą.";
    }
    if (!is_numeric($form['period'])) {
        $msgs[] = "Okres nie jest liczbą całkowitą.";
    }
    if (!is_numeric($form['rate'])) {
        $msgs[] = "Oprocentowanie nie jest liczbą całkowitą.";
    }
    if ($form['period'] > 15 || $form['period'] < 1) {
        $msgs[] = "Okres musi być w przedziale od 1 do 15 lat.";
    }
    if ($form['rate'] > 20 || $form['rate'] < 5) {
        $msgs[] = "Kredyt musi być oprocentowany w przedziale od 5% do 20%.";
    }
    if ($form['amount'] < 0) {
        $msgs[] = "Kwota kredytu nie może być mniejsza od 0.";
    }
    if (count($msgs) != 0) return false;
    else return true;


}
function process(&$form,&$infos,&$msgs,&$result){
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
    $result = ($form['amount'] + ($form['amount'] * $form['rate'] / 100)) / ($form['period'] * 12);
}

$form = null;
$infos = array();
$result = null;
$messages = [];
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 3');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('hide_intro',$hide_intro);

//zmienne moga nie istnieć, więc sprawdzamy żeby nie było ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');