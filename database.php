<?php  

    define("SERVER_LOCAL","si_ads_2period.mysql.dbaas.com.br");
    define("SERVER_USER","si_ads_2period");
    define("SERVER_PASSWORD","SiAdsCMC2022!");
    define("DATABASE_NAME","si_ads_2period");

    $conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);

?>


// SELECT * FROM `ethieny_ads_acessorios`