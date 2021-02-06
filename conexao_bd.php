<?php

    class db{
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $data_base = 'db_social_enterprise';

        function conecta_mysql(){
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->data_base);
            
            mysqli_set_charset($con, 'utf-8');

            if(mysqli_connect_errno($con)){
                echo 'Erro ao conectar com o banco de dados' . mysqli_connect_error();
            }

            return $con;

        }
    }

?>