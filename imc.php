<?php
require 'App/Assets/PHP/funciones.php';
$select = new select();
if (isset($_SESSION['id'])) {
    $user = $select-> SelectuserByUser($_SESSION['id']);
} else {
    header('location: login.php');
}?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA IMC</title>
    <link rel="stylesheet" href="App/Assets/CSS/IMC/IMC.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Navbar.css">
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Footer.css">

</head>
<body>
        <!--Nav-->
        <header class="header-nav" id="header">
            <nav class="nav">
                <a href="index.html"><img src="App/Assets/IMG/PNG/Logo.png" alt="logo"></a>
    
                <i class="fa-solid fa-bars abrir-menu" id="abrir"></i>
                <div class="nav__menu" id="navbar">
                    <i class="fa-solid fa-x cerrar-menu" id="cerrar"></i>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" id="inicio">Inicio</a>
                        </li>
                        <hr class="separador">
                        <li class="nav__item">
                            <a href="Tienda.php">Tienda</a>
                        </li>
                        <hr class="separador">
                        <li class="nav__item">
                            <a href="imc.php">IMC</a>
                        </li>
                        <hr class="separador">
                        <li class="nav__item">
                            <a href="calorica.php">Cálorica</a>
                        </li>
                        <hr class="separador">
                        <li class="nav__item dropdown">
                            <a href="#" id="radio">
                                <?php echo $user ['usuario'];?>
                            </a>
                            <i class="fas fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                <li><a href="ajustes.php">Ajustes</a></li>
                                <li><a href="App/Assets/PHP/cerrarSesion.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                        <div class="nav__item submenu" id="toggle-carrito">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            <div id="carrito">
                                <table id="lista-carrito">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="btn-2" style="color: white;">Vaciar carrito</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
        <!--Fin nav-->

    <section class="home">
        <h1 class="bienvenido" style="margin-top: 80px; color: white">Bienvenido <?php echo $user['nombre_completo'];?></h1>
        <div class="text">
            <div class="container">
                <h1 id="titulo" class="titu">Calculadora Índice masa corporal IMC</h1>

                <table class="tabla-imc">
                    <thead>
                        <tr>
                            <th>Rango de IMC</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    <tbody class="partr">
                        <tr class="tdpar">
                            <td >Menos de 18.5</td>
                            <td>Bajo peso</td>
                        </tr>
                        <tr>
                            <td>18.5 - 24.9</td>
                            <td>Peso normal</td>
                        </tr>

                        <tr>
                            <td>25 - 29.9</td>
                            <td>Sobrepeso</td>
                        </tr>
                        <tr>
                            <td>30 o más</td>
                            <td>Obesidad</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>

                <div id="calculator">
                    <input type="number" id="weight" placeholder="Peso (kg)">
                    <br>
                    <br>

                    <input type="number"  id="height" placeholder="Altura (1.cm)">
                    <br>
                    <br>

                    <button onclick="calcularIMC()" id="btnCalcular">Calcular IMC</button>

                    <div id="result"></div>
                    <br>
                    <br>

                    <div id="parrafos" style="display: none;">
                        <p id="bajoPeso"><strong>Bajo peso: </strong><br>

                            Las personas con esta condición pueden 
                            tener un sistema inmunológico débil, así como una 
                            pobre condición física, haciéndolos propensos a 
                            padecer infecciones.
                            Otros riesgos que puede causar el Bajo peso son:
                            Problemas de fertilidad,
                            especialmente en mujeres. También hay problemas en el embarazo

                        
                        </p>

                        <p id="pesoNormal"><strong>Peso normal o recomendable</strong>
                            Las personas con un peso dentro de este rango, generalmente tienen
                            un menor riesgo de desarrollar enfermedades crónicas, como la 
                            diabetes tipo 2, enfermedades cardíacas y algunos tipos de cáncer.
                        
                        
                        </p>

                        <p id="pesoSobrepeso"><strong>Sobrepeso</strong><br>
                            El sobrepeso no es solo un problema estético. Es un problema médico que aumenta 
                            el riesgo para muchas otras enfermedades y problemas de salud. Estos
                             pueden incluir enfermedades cardíacas, diabetes, presión arterial alta, 
                             colesterol alto, enfermedad hepática, apnea del 
                            sueño y determinados tipos de cáncer.
                        </p>
        
                            <p id="Obesidad"><strong>Obesidad</strong><br>
                                La obesidad es una enfermedad grave y crónica. Puede llevar a
                                otros problemas de salud, incluyendo diabetes, enfermedad cardíaca
                                y algunos cánceres. Las personas con obesidad tienen una mayor
                                probabilidad de sufrir estos problemas de salud: Glucosa (azúcar)
                                alta en la sangre o diabetes.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--Footer -->
        <footer class="footer">
            <div class="footer-contenido">
                <div class="footer-logo">
    
                </div>
                <div class="footer-links">
                    <h4>GYM WARRIOR</h4>
                    <ul>
                        <li><a href="">Nosotros</a></li>
                        <li><a href="">Política de privacidad</a></li>
                        <li><a href="">Registrate</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="">¿Cómo uso GYM WARRIOR?</a></li>
    
                        <li><a href="">Errores en la página</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Servicio al cliente</h4>
                    <ul>
                        <li><a href="quejas.html">Preguntas</a></li>
                        <li><a href="quejas.html">Quejas</a></li>
                        <li><a href="quejas.html">Reclamos</a></li>
                    </ul>
                </div>
    
                <div class="red-social">
                    <h4>Siguenos</h4>
                    <a href=""><i class="fab fa-instagram" style="color: white;"></i></a>
                    <a href=""><i class="fab fa-facebook" style="color: white;"></i></a>
                    <a href=""><i class="fab fa-twitter" style="color: white;"></i></a>
                    <a href=""><i class="fab fa-tiktok" style="color: white;"></i></a>
    
                </div>
            </div>
        </footer>

    <script src="App/Assets/JS/IMC/IMC.js"></script>
    <script src="App/Assets/JS/Tienda/nav.js"></script>
    <script src="https://kit.fontawesome.com/5714a607c8.js" crossorigin="anonymous"></script>
    <script src="App/Assets/JS/Tienda/carrito.js"></script>
</body>
</html>