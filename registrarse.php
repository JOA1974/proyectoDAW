<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Registro</title>
    
</head>
<body>
    <header>
		<nav class="menu">
			<div class="barraInicial">
				<a href="#">Rutas Destacadas</a>
				<a href="#quienessomos">Quienes somos</a>
				<a href="#proximasrutas">Próximas Rutas</a>
				<a href="#consejosenruta">Consejos en Ruta</a>
			</div>
		</nav>
		<div class="fotoTitulo">
			<a href="index.html">
				<h1 class="tituloprincipal">Senderismo Parque Alcosa</h1>
                <h2 class="subtituloprincipal">El Deportista Novato</h2>
			</a>
		</div>
	</header>
    <section>
        <form action="" method="post" class="formularioregistro">
            <h2>Formulario de registro</h2>
                <div>
                    <label for="nombre">Nombre:*</label>
                    <input type="text" class="datos" name="nombre" placeholder="Escribe tu nombre" required>
                    
                </div>
                <div>
                    <label for="apellido1">Primer Apellido:*</label>
                    <input type="text" class="datos" name="apellido1" placeholder="Escribe tu primer apellido" required>
                    
                </div>
                <div>
                    <label for="apellido2">Segundo Apellido:</label>
                    <input type="text" class="datos" name="apellido2" placeholder="Escribe tu segundo apellido" required>
                    
                </div>
                <div>
                    <label for="email">email:*</label>
                    <input type="email" class="datos" name="email" placeholder="Escribe tu correo electrónico" required>
                    
                </div>
                <div>
                    <label for="edad">Edad:*</label>
                    <input type="number" class="datos" name="edad" placeholder="Escribe tu edad" max="120" min="0" required>
                                   </div>   
                <div>
                    <label for="direccion">Dirección:*</label>
                    <input type="text" class="datos" name="direccion" placeholder="Escribe tu dirección" rows="5">
                    
                </div>

                <div>
                    <label for="telefono">Teléfono:*</label>
                    <input type="tel" class="datos" name="telefono" placeholder="Telefono de contacto">
                    
                </div>
                <div>
                    <label for="usuario">Usuario:*</label>
                    <input type="text" class="datos" name="usuario" placeholder="Escribe un usuario" required>
                    
                </div>
                <div>
                    <label for="password">Password:*</label>
                    <input type="password" class="datos" name="password" id="key" placeholder="Contraseña">
                    
                </div>

                <div>
                    <label for="password2">Repite tu password:*</label>
                    <input type="password" class="datos" name="password2" id="key2" placeholder="Repite tu contraseña" onfocus="activarComparacion()">
                    <cite id="mensaje">Las contraseñas deben coincidir</cite>
                </div>
                <script>
                    //Con esta función verificamos que las contraseñas coinciden
                    function compararDatos() {
                        // Obtener los valores de los campos
                        var campoKey = document.getElementById('key').value;
                        var campoKey2 = document.getElementById('key2').value;
                        var respuesta = document.getElementById('mensaje');
                        // Comparar los valores
                        if (campoKey === campoKey2) { 
                            // Si las contraseñas coinciden, no hacemos nada.
                        } else {
                            alert('¡Las contraseñas no coinciden! Por favor, inténtalo de nuevo.');
                            campoKey="";
                            campoKey2="";
                        }
                    }
                    // Activa la comparación cuando el campo 'key2' obtiene el foco
                    function activarComparacion() {
                        document.getElementById('key2').addEventListener('blur', compararDatos);
                        //document.getElementById('key2').onblur = "compararDatos";
                    }
                </script>
                <br>
                <input type="submit" class="boton" value="Registrarse" name="registrarse">
                <br>
                <input type="checkbox" id="condiciones" name="condiciones" value="" required>
                <label for="condiciones">Acepto <a href="#">Términos y condiciones*</a></label>
                <br>
                <input type="checkbox" id="politica" name="politica" value="" required>
                <label for="politica">Acepto <a href="politicadeprivacidad.html">Acepto política de privacidad*</a></label>
                <h2 class="regreso"><a href="index.html">YA ESTOY REGISTRADO</a></h2>
                <br>
                <br>
                <cite>Requeridos todos los que tengan *</cite>
            



        </form>

        
    </section>
    
    <footer>
		<div>
			<nav class="menulegal">
				<div class="barraLegal">
				<a href="politivadecoocies.html" target="_blank">Politica de cookies</a>
				<a href="politicadeprivacidad.html" target="_blank">Politica de Privacidad</a>
				<a href="avisolegal.html" target="_blank">Aviso Legal</a>
				<a href="formulariodecontacto.html" target="_blank">Contacto</a>
			</nav>
			<div>
				<h3 class="jadigital"><a href="https://www.youtube.com/playlist?list=PL6qh5SOcbwpCgLOl0xquvqK8zcdGyY-tJ" target="_blank" rel="noopener noreferrer">Web creada por JADigital Copyright.Todos los derechos reservados.</a></h3>
			</div>
		</div>
	</footer>
</body>
</html>