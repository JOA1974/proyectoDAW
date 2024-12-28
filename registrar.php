<?php

include("conexion.php");

if(isset($_POST["registrarse"])){
    if(
        //Comprobamos tienen datos por longitud mayor q 0
        strlen($_POST["nombre"]) >=1 &&
        strlen($_POST["apellido1"]) >=1 &&
        strlen($_POST["apellido2"]) >=1 &&
        strlen($_POST["email"]) >=1 &&
        strlen($_POST["edad"]) >=1 &&
        strlen($_POST["direccion"]) >=1 &&
        strlen($_POST["telefono"]) >=1 &&
        strlen($_POST["usuario"]) >=1 &&
        strlen($_POST["password"]) >=1
        ){
            //Guadamos los datos eliminando posibles espacio en blanco principio y fin
            $name = trim($_POST["nombre"]);
            $apell1 = trim($_POST["apellido1"]);
            $apell2 = trim($_POST["apellido2"]);
            $correo = trim($_POST["email"]);
            $age = trim($_POST["edad"]);
            $adress = trim($_POST["direccion"]);
            $phone = trim($_POST["telefono"]);
            $user = trim($_POST["usuario"]);
            $key = trim($_POST["password"]);
            $fecha = date("d/m/y");

            //Guardamos en consulta para ingresar los datos en la base
            $consulta="INSERT INTO datos(nombre, primerApellido, segundoApellido, email, edad, direccion, telefono, usuario, contraseña, fechainscripcion) VALUES('$name', '$apell1', '$apell2', '$correo', '$age', '$adress', '$phone', '$user', '$key', '$fecha')";
            
            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                ?>
                    <script>alert("REGISTRO COMPLETADO");
                        // Utilizamos setTimeout para esperar 1000 milisegundos (1 segundo) antes de redirigir a index.html
                         setTimeout(function() {
                            window.location.href = "index.html";
                        }, 1000);
                    </script>
                  
                <?php
            }
            } else {
                ?>
            <script>alert("FALTAN CAMPOS POR COMPLETAR O HAY ERRORES VUELVE A INTENTARLO");
                // Utilizamos setTimeout para esperar 1000 milisegundos (1 segundo) antes de redirigir a registrarse.php
                setTimeout(function() {
                            window.location.href = "registrarse.php";
                        }, 1000);
            </script>
        <?php
            }
    } else {
        ?>
            <script>alert("FALTAN CAMPOS POR COMPLETAR O HAY ERRORES VUELVE A INTENTARLO");
                // Utilizamos setTimeout para esperar 1000 milisegundos (1 segundo) antes de redirigir a registrarse.php
                setTimeout(function() {
                            window.location.href = "registrarse.php";
                        }, 1000);
            </script>
        <?php
    }

?>