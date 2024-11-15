<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/LoginForm.class.php';

class LoginCtrl {

    private $msgs;
    private $form;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new LoginForm();
    }

    // Pobranie parametrów z formularza
    public function getParamsLogin() {
        $this->form->login = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
        $this->form->pass = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }

    // Walidacja danych logowania
    public function validateLogin() {
        $this->getParamsLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($this->form->login == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ($this->form->pass  == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        // Jeśli wystąpiły błędy, przerywamy walidację
        if ($this->msgs->isError()) {
            return false;
        }

        // Sprawdzenie poprawności loginu i hasła
        $users = [
            'admin' => 'admin',
            'manager' => 'manager',
            'user' => 'user'
        ];

        if (isset($users[$this->form->login]) && $users[$this->form->login] === $this->form->pass) {
            session_start();
            $_SESSION['role'] = $this->form->login;
            return true;
        }
        

        $this->msgs->addError('Niepoprawny login lub hasło');
        return false;
        }
        return false;
    }

    // Generowanie widoku formularza logowania
    public function generateView() {
        global $conf;

        if ($this->validateLogin()) {
            header("Location: " . $conf->app_root . "/app/calc.php");
            exit();
        }

        $smarty = new Smarty\Smarty();
        $smarty->assign('login_','login.php');
        $smarty->assign('login2_','Zaloguj');
        $smarty->assign('topic','Zaloguj się');
        $smarty->assign('conf', $conf);
        $smarty->assign('form', $this->form);
        $smarty->assign('msgs', $this->msgs);
        $smarty->display($conf->root_path . '/app/security/login.html');
    }
}
