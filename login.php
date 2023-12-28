<?php
    $user = "f0ll0wM3";
    $cpta = "z0z0";
    $err = "err";
    require '../manejoDatos.php'; $conexion = Conexion();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $ingresoCuenta = $_POST["ingresoCuenta"];
        $ingresoContrasenia = $_POST["ingresoContraseña"];

        $query = "SELECT cuenta, contraseña FROM cuentas WHERE cuenta = ?";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $ingresoCuenta);
        mysqli_stmt_execute($stmt);
        $resultados = mysqli_stmt_get_result($stmt);

        if($resultados && mysqli_num_rows($resultados) > 0){
            $fila = mysqli_fetch_assoc($resultados);
            $contraseniaBase = $fila['contraseña'];

            if(password_verify($ingresoContrasenia, $contraseniaBase)) {
                mysqli_stmt_close($stmt);
                mysqli_close($conexion);   
                header("Location: ../$cpta/$user");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header("Location: $err");
        exit();
    }
?>