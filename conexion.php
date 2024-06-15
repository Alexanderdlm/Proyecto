<?php //se inicia el codigo php
    
    $servidor = "localhost"; //Define la variable del servidor en la que estara alojada
    $usuario = "root"; //Definición de la variable del usuario
    $clave = ""; //Definición de la variable de la clave de la BD
    $baseDeDatos = "proyecto"; //Declara la variable que guarda el nombre de la BD

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); // Cracion de la conexion con la BD

//se termina el codigo php
?> 

<?php //se inicia el codigo php

    if(isset($_POST['enviar'])){ // Corrobora si el formulario fue enviado con el boton "enviar"

        // Obtiene los datos que fueron enviados
        $nombre= $_POST ['nombre'];
        $plantel= $_POST ['plantel'];
        $grupo= $_POST ['grupo'];
        $pregunta1= $_POST ['pregunta1'];
        $pregunta2= $_POST ['pregunta2'];
        $pregunta3= $_POST ['pregunta3'];
        $pregunta4= $_POST ['pregunta4'];
      

        // Crear la consulta SQL para insertar los datos en la tabla "datos"
        $insertarDatos = "INSERT INTO datos VALUES('$nombre','$plantel','$grupo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos); 

        header("Location: {$_SERVER['REQUEST_URI']}");exit; // Recarga la pagina al enviar el formulario
   } // fin del bloque if

// fin del archivo php
?>