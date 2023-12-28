<!--                     
mmmmm                     mmmmm 
MM        `7MM"""Mq.         MM 
MM          MM   `MM.        MM 
MM          MM   ,M9         MM 
MM          MMmmdM9          MM 
MM          MM  YM.          MM 
MM          MM   `Mb.        MM 
MM        .JMML. .JMM.       MM 
MM                           MM 
MMmmm                     mmmMM
-->

<?php require 'login.php'; $addUser = "4ddUs3r"; $addUser2 = "1nput" ?>

<html>lo
    <head>
        <meta charset="UTF-8">
        <title>Ingreso</title>
        <link rel="stylesheet" href="../r3d/r4inb0w">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@600&display=swap" rel="stylesheet">
        <script>
            function subirAlEncabezado() {
                var encabezado = document.querySelector("body");
                encabezado.scrollIntoView();
            }
        </script>
    </head>

    <body class="bodyTigre">

        <h3 class="tituloInicial">ERROR 500 [unexpected_error]</h3><br>
        <h1>🇷​​​​​🇴​​​​​🇴​​​​​🇹​​​​​-🇺​​​​​🇸​​​​​🇪​​​​​🇷​​​​​@ 𝕀𝕟𝕘𝕣𝕖𝕤𝕖 𝕤𝕦 𝕦𝕤𝕦𝕒𝕣𝕚𝕠 𝕪 𝕔𝕠𝕟𝕥𝕣𝕒𝕤𝕖𝕟̃𝕒</h1>
        <form method="POST" class="form" action="login.php">
            
            <input class="ingresoNombre" name="ingresoCuenta" type="text" autocomplete="off" required="required"/>
            <label for="usuario" class="usuario">Usuario</label>
           
            <input class="ingresoContra" name="ingresoContraseña" type="password" autocomplete="off" required="required"/>
            <label for="contrasenia" class="contraseña">Password</label>
            <input class="btnResultado" type="submit" value="Enviar"/>

        </form>
        <a href="<?php echo "../".$addUser2."/".$addUser ?>" class="crearUsuario">Crear Usuario</a>
    </body>

    <footer>
        <p class="footerTexto">Todos los derechos reservados ©</p>
        <p class="footerTexto">[ Creado por Favio Joel Zalazar ]</p>
        <a href='https://cafecito.app/strongrammers' class="cafecito" rel='noopener' target='_blank'><img srcset='https://cdn.cafecito.app/imgs/buttons/button_5.png 1x, https://cdn.cafecito.app/imgs/buttons/button_5_2x.png 2x, https://cdn.cafecito.app/imgs/buttons/button_5_3.75x.png 3.75x' src='https://cdn.cafecito.app/imgs/buttons/button_5.png' alt='Invitame un café en cafecito.app' /></a>
    </footer>

</html>