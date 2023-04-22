<?php
require "environment.php";


 if(ENVIRONMENT == "development"){
            define("BASE_URL", "http://localhost/Minha_estante_virtual/");
            define("DBNAME", "minha_estante_virtual");
            define('DBHOST', 'localhost');
            define('DBUSER', 'root');
            define('DBPASS', '');
}else{
            //modificar as variaveis para as do servidor de produção
            define("BASE_URL", "http://localhost/Minha_estante_virtual/");
            define('DBNAME', 'epiz_34052647_minha_estante_virtual');
            define('DBHOST', 'sql109.epizy.com');
            define('DBUSER', 'epiz_34052647');
            define('DBPASS', 'OL2JnHDpiNNIHE');
}
