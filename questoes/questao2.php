<?php

    class Questao2
    {

        private function redirecionar()
        {
            header("Location:http://www.google.com");
            exit;
        }
    
        private function mensagem()
        {
            echo "Você não está logado, por favor fazer o login.";
        }

        public function isLogged()
        {
            ($_SESSION['loggedin'] == true || $_COOKIE['loggedin'] == true) ? $this->redirecionar() : $this->mensagem();
        }
    }

    $questao2 = new Questao2();
    $questao2->isLogged();

    
?>