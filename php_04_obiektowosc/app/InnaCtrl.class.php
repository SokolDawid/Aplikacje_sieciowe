<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';


// 4. Przygotowanie danych dla szablonu
class InnaCtrl {
    public function generateView(){
            global $conf;

            $smarty = new Smarty\Smarty();
            $smarty->assign('conf',$conf);
            $smarty->assign('login_','logout.php');
            $smarty->assign('login2_','Wyloguj');
            $smarty->assign('topic','Informacje');

            $smarty->display($conf->root_path.'/app/inna_chroniona.html');
}
}