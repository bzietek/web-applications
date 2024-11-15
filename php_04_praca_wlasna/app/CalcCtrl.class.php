<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;
        $this->form->period = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
    }

    public function validate() {
        if (! (isset ( $this->form->amount ) && isset ( $this->form->rate ) && isset ( $this->form->period ))) {
            return false;
        }

        if ($this->form->amount == "") {
            $this->msgs->addError("Nie podano kwoty kredytu.");
        }
        if ($this->form->rate == "") {
            $this->msgs->addError("Nie podano oprocentowania kredytu.");
        }
        if ($this->form->period == "") {
            $this->msgs->addError("Nie podano okresu trwania kredytu.");
        }

        if (! $this->msgs->isError()){
            if (!is_numeric($this->form->amount)) {
               $this->msgs->addError("Kwota nie jest liczbą.");
            }
            if (!is_numeric($this->form->period)) {
                $this->msgs->addError("Okres nie jest liczbą całkowitą.");
            }
            if (!is_numeric($this->form->rate)) {
                $this->msgs->addError("Oprocentowanie nie jest liczbą całkowitą.");
            }
            if ($this->form->period > 15 || $this->form->period < 1) {
                $this->msgs->addError("Okres musi być w przedziale od 1 do 15 lat.");
            }
            if ($this->form->rate > 20 || $this->form->rate < 5) {
                $this->msgs->addError("Kredyt musi być oprocentowany w przedziale od 5% do 20%.");
            }
            if ($this->form->amount < 0) {
                $this->msgs->addError("Kwota kredytu nie może być mniejsza od 0.");
            }
        }

        return ! $this->msgs->isError();
    }

    public function process(){
        $this->getParams();

        if ($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->rate = intval($this->form->rate);
            $this->form->period = intval($this->form->period);
            $this->msgs->addInfo("Parametry poprawne.");

            $this->result->result = ($this->form->amount + ($this->form->amount * $this->form->rate / 100)) / ($this->form->period * 12);
            $this->msgs->addInfo("Wykonano obliczenia");
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign("conf", $conf);
        $smarty->assign('page_title','Przykład 4');
        $smarty->assign('page_description','Obiektowość w modelu MVC');
        $smarty->assign('page_header','OOP w PHP');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path.'/app/CalcView.tpl');
    }
}