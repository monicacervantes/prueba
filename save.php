<?php

require_once 'base.php'; 

    $cdb = new mysqlDB;

 $nombre = $_POST['nombre'];
 $email=$_POST['email'];
 $telefono=$_POST['telefono'];
 $texto = $_POST['texto'];
    $query="INSERT registro
            VALUES('', '$nombre', '$email', '$telefono', '$texto') ";
            $cdb->query($query);
    $Clientes= new mysqlDB;
        $query="SELECT *
        from registro
        WHERE email = '$email'";
        $Clientes->query($query);
        $Clientes->fetch();   

            echo"<script>location.href='index.php'</script>";

     


        ?>