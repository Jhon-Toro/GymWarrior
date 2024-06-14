<?php
require 'App/Assets/PHP/funciones.php';
if (isset($_SESSION['id'])) {
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../GymWarrior/App/Assets/CSS/LOGIN/styles.css">
    <link rel="stylesheet" href="App/Assets/CSS/LOGIN/styles.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya estás registrado?</h3>
                    <p>Inicia sesión en el botón de abajo</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿No estás registrado?</h3>
                    <p>Regístrate para poder iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <?php $iniciosesion = new Inicio_sesion;
                    if (isset($_POST['submit'])) {
                        $result = $iniciosesion->InicioSesion(
                            $_POST['correo'],
                            $_POST['password']
                        );
                        if ($result == 1) {
                            $_SESSION['iniciosesion'] = true;
                            $_SESSION['id'] = $iniciosesion->IdUsuario();
                            header('location: home.php');
                        } else if ($result == 2) {
                            echo "<div class='error'>Contraseña incorrecta</div>";
                        } else if ($result == 3) {
                            echo "<div class='error'>Usuario no registrado</div>";
                        }
                    } ?>

                    <input type="text" placeholder="Correo Electrónico" required name="correo">
                    <input type="password" placeholder="Contraseña" required name="password">

                    <a href="#" id="olvido">¿Olvidó su contraseña?</a><br>
                    <button type="submit" name="submit">Entrar</button>
                </form>

                <!--Register-->
                <form class="formulario__register" method="POST">
                    <h2>Regístrarse</h2>
                    <?php
                    if (isset($_POST['submit2'])) {
                        $registro = new Registro();
                        $resultadoRegistro = $registro->registrarse(
                            $_POST['nombre_completo'],
                            $_POST['correo'],
                            $_POST['genero'],
                            $_POST['usuario'],
                            $_POST['password'],
                            $_POST['confirmpassword']
                        );
                        if ($resultadoRegistro === 0) {
                            $iniciosesion = new Inicio_sesion();
                            $result = $iniciosesion->InicioSesion($_POST['correo'], $_POST['password']);
                            if ($result == 1) {
                                $_SESSION['id'] = $iniciosesion->IdUsuario();
                                header("Location: home.php");
                                exit();
                            }
                        } elseif ($resultadoRegistro === 4) {
                            echo "<div class='error'>El usuario ya existe</div>";
                            ?><script src="../GymWarrior/App/Assets/JS/LOGIN/script.js"></script>
                            <script>register();</script>
                            <?php
                        } elseif ($resultadoRegistro === 5) {
                            echo "<div class='error'>El correo está en uso</div>";
                            ?><script src="../GymWarrior/App/Assets/JS/LOGIN/script.js"></script>
                            <script>register();</script>
                            <?php
                        } elseif ($resultadoRegistro === 6) {
                            echo "<div class='error'>Las contraseñas no coinciden</div>"
                            ?><script src="../GymWarrior/App/Assets/JS/LOGIN/script.js"></script>
                            <script>register();</script>
                            <?php
                        
                        }
                    }

                    ?>
                    <input type="text" placeholder="Nombre completo" required name="nombre_completo">
                    <input type="text" placeholder="Correo electrónico " required name="correo">

                    <select name="genero" id="genero" required>
                        <option value="" disabled selected>Seleccione su género: </option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <input type="text" placeholder="Usuario" required name="usuario">
                    <input type="password" placeholder="Contraseña" required name="password">
                    <input type="password" placeholder="Confirmar Contraseña" required name="confirmpassword">
                    <button type="submit" name="submit2">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="../GymWarrior/App/Assets/JS/LOGIN/script.js"></script>
    <script src="App/Assets/JS/LOGIN/script.js"></script>
</body>

</html>