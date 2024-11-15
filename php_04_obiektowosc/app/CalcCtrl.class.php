<?php
//załaduj Smarty
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {
    
    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku
    
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
//pobranie parametrów
    public function getParams(){
            $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
            $this->form->period = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
            $this->form->interest_rate = isset($_REQUEST['interest_rate']) ? $_REQUEST['interest_rate'] : null;	
    }

//walidacja parametrów z przygotowaniem zmiennych dla widoku
    public function validate(){
        if(!(isset($this->form->amount) && isset($this->form->period) && isset($this->form->interest_rate))){    
            return false;
        }

        if ( $this->form->amount == "") {
                $this->msgs->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->period == "") {
                $this->msgs->addError('Nie podano okresu spłacania kredytu');
        }
        if ( $this->form->interest_rate == "") {
                $this->msgs->addError('Nie podano oprocentowania kredytu');
        }

        if (! $this->msgs->isError()) {

        if (! (is_numeric($this->form->amount) && $this->form->amount>0)) {
                $this->msgs->addError('Kwota kredytu nie jest liczbą dodatnią');
        }

        if (! (is_numeric($this->form->period) && $this->form->period>0)) {
                $this->msgs->addError('Okres spłacania kredytu nie jest liczbą dodatnią');
        }

        if (! (is_numeric($this->form->interest_rate) && $this->form->interest_rate>0)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą dodatnią');       
        }
        }

        return ! $this->msgs->isError();
    }
	
    public function process(){
            global $role;
            
            $this->getparams();

            if ($this->validate()) {
            $this->form->amount = intval($this->form->amount);
            $this->form->period = intval($this->form->period);
            $this->form->interest_rate = floatval($this->form->interest_rate);

            if ($this->form->amount > 1000000 && $role !== "manager") {
            $this->msgs->addError("Obliczenia dla kwoty powyżej 1 000 000 może przetworzyć tylko manager banku");
            $this->msgs->isError();
            } else{
            $this->msgs->addInfo('Parametry poprawne.');
            $this->result->result = (($this->form->amount * $this->form->interest_rate)/ 100 + $this->form->amount) / ($this->form->period * 12);
            
            $this->msgs->addInfo('Wykonano obliczenia.');}
            }

        $this->generateView();
    }

    public function generateView(){
            global $conf;
		
            $smarty = new Smarty\Smarty();
            $smarty->assign('conf',$conf);


            $smarty->assign('login_','logout.php');
            $smarty->assign('login2_','Wyloguj');
            $smarty->assign('topic','Kalkulator kredytowy');

            $smarty->assign('msgs',$this->msgs);
            $smarty->assign('form',$this->form);
            $smarty->assign('res',$this->result);

            $smarty->display($conf->root_path.'/app/calc.html');
    }
}