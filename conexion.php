<?php

    //datos de conexión a base de datos

    $db_host="localhost";//Dirección BBDD
    $db_nombre="registro";//Nombre de la BBDD
    $db_usuario="root";//Usuario de la BBDD
    $db_contra="";//Contraseña de la BBDD

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);//Podemos prencindir del nombre de la base de datos en cuyo caso debemos usar 1*
    //$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    //Si ocurre error en la conexión por la dirección
    if(mysqli_connect_errno()){
        echo"Fallo en la conexión con la BBDD";
        exit(); //Para salir de la conexión
    }
    //Función para especificar que base de datos queremos conectarnos 1*
    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");//1* Además ofrecemos información en caso de error en el nombre

    //Para asegurarnos los carécteres latinos
    mysqli_set_charset($conexion,"utf8");

    $consulta="SELECT * FROM DATOS";

    $resultados=mysqli_query($conexion, $consulta);

    $fila=mysqli_fetch_row($resultados);//Accede a los resultados en una array tb llamado resulset, accediendo a cada registro sucesivamente cada vez q la llamas

    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    echo $fila[4] . " ";
    echo $fila[5] . " ";
    echo $fila[6] . " ";
    echo $fila[7] . " ";
    echo $fila[8] . " ";
    echo $fila[9] . " ";
    echo $fila[10] . " ";

    mysqli_close($conexion);//Para cerrar la conexión con la base de datos
?>