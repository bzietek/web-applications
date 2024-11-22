<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->rate = getFromRequest('rate');
        $this->form->amount = getFromRequest('amount');
        $this->form->period = getFromRequest('period');
    }

    public function validate() {
        if (! (isset ( $this->form->amount ) && isset ( $this->form->rate ) && isset ( $this->form->period ))) {
            return false;
        }

        if ($this->form->amount == "") {
            getMessages()->addError("Nie podano kwoty kredytu.");
        }
        if ($this->form->rate == "") {
            getMessages()->addError("Nie podano oprocentowania kredytu.");
        }
        if ($this->form->period == "") {
            getMessages()->addError("Nie podano okresu trwania kredytu.");
        }

        if (! getMessages()->isError()){
            if (!is_numeric($this->form->amount)) {
                getMessages()->addError("Kwota nie jest liczbą.");
            }
            if (!is_numeric($this->form->period)) {
                getMessages()->addError("Okres nie jest liczbą całkowitą.");
            }
            if (!is_numeric($this->form->rate)) {
                getMessages()->addError("Oprocentowanie nie jest liczbą całkowitą.");
            }
            if ($this->form->period > 15 || $this->form->period < 1) {
                getMessages()->addError("Okres musi być w przedziale od 1 do 15 lat.");
            }
            if ($this->form->rate > 20 || $this->form->rate < 5) {
                getMessages()->addError("Kredyt musi być oprocentowany w przedziale od 5% do 20%.");
            }
            if ($this   ->form->amount < 0) {
                getMessages()->addError("Kwota kredytu nie może być mniejsza od 0.");
            }
        }

        return ! getMessages()->isError();
    }

    public function process(){
        $this->getParams();

        if ($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->rate = intval($this->form->rate);
            $this->form->period = intval($this->form->period);
            getMessages()->addInfo("Parametry poprawne.");

            $this->result->result = ($this->form->amount + ($this->form->amount * $this->form->rate / 100)) / ($this->form->period * 12);
            getMessages()->addInfo("Wykonano obliczenia");
        }

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title','Przykład 5');
        getSmarty()->assign('page_description','Aplikacja z jednym punktem wejścia.');
        getSmarty()->assign('page_header','Kontroler główny');
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        getSmarty()->display('CalcView.tpl');
    }
}