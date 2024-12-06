<?php

namespace app\controllers;

use app\forms\CalcForm;
use DateTime;
use PDOException;

class CreditListCtrl {

    private $records;
    private $form; // Deklaracja zmiennej form

    public function __construct(){
        // Inicjalizacja formularza
        $this->form = new CalcForm(); // Tworzymy pusty obiekt
    }

    public function action_listShow() {
        try {
            $this->records = getDB()->select("creditcalc", [
                "idcredit",
                "amount",
                "period",
                "interest_rate",
                "monthly_installment",
                "date",
            ]);
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        $this->generateView();
    }

    public function validateDelete() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}

    public function action_listDelete() {
        // 1. Walidacja ID kredytu do usunięcia
        if ($this->validateDelete()) {
            try {
                // 2. Usunięcie rekordu
                getDB()->delete("creditcalc", [
                    "idcredit" => $this->form->id
                ]);
                getMessages()->addInfo('Pomyślnie usunięto rekord');
            } catch (PDOException $e) {
                getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
                if (getConf()->debug) getMessages()->addError($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy
        forwardTo('listShow');
    }

    public function generateView() {
        getSmarty()->assign('login_', 'logout');
        getSmarty()->assign('login2_', 'Wyloguj');
        getSmarty()->assign('topic', 'Lista obliczeń');
        getSmarty()->assign('calcCredit', $this->records);
        getSmarty()->display('CreditList.tpl');
    }
}
