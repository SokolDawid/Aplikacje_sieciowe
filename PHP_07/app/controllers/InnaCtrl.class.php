<?php

namespace app\controllers;

class InnaCtrl {
    
    public function action_innaShow(){
            $this->generateView();
    }
    
    public function generateView(){
            getSmarty()->assign('login_','logout');
            getSmarty()->assign('login2_','Wyloguj');
            getSmarty()->assign('topic','Informacje');

            getSmarty()->display('InnaView.tpl');
    }
}