<?php
    $host = 'database-1.crrgeosgu4h6.ap-southeast-1.rds.amazonaws.com:3306'; // El nombre del servicio de la base de datos en el archivo docker-compose.yml; // El puerto mapeado en el archivo docker-compose.yml
    $database = 'sistema_ecommerce'; // El nombre de la base de datos definido en el archivo docker-compose.yml
    $user = 'admin'; // El usuario definido en el archivo docker-compose.yml
    $password = 'adminpassword123'; // La contraseña definida en el archivo docker-compose.yml

    $con = mysqli_connect($host, $user, $password, $database);
?>