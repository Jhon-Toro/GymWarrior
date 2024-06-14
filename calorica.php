<?php
require 'App/Assets/PHP/funciones.php';
$select = new select();
if (isset($_SESSION['id'])) {
    $user = $select-> SelectuserByUser($_SESSION['id']);
} else {
    header('location: login.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Calórica</title>
    <link rel="stylesheet" href="App/Assets/CSS/CALORICA/calorica.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
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
        
    <section class="home">
        <h1 id="titulo" class="titu">Calculadora Calórica</h1>

        <table>
            <thead>
                <tr>
                    <th>Género</th>
                    <th>Fórmulas</th>
                </tr>
            </thead>
            <tbody class="partr">
                <tr class="tdpar">

                    <td>Hombres</td>

                    <td>TMB = 10 x peso + 6.25 x altura - 5 x edad + 5</td>
                </tr>
                <tr>
                    <td>Mujeres</td>
                    
                    <td>TMB=10 x peso +6.25 x altura - 5 x edad  - 161</td>
                </tr>
            </tbody>
        </table>
        <div class="explica">

            <p><strong>Las fórmulas de Harris-Benedict se utilizan 
                para estimar la TMB, que es la cantidad de calorías que una persona necesita para mantener las
                funciones corporales básicas en reposo. Hay dos versiones principales de
                la fórmula: una para hombres y otra para mujeres.</strong></p><br>
            
                <p><strong>Peso (kg):
                Multiplicar el peso en kilogramos por 10.
                El peso contribuye directamente a la cantidad de energía que el 
                cuerpo necesita para mantener las funciones básicas.
                Altura (cm):
                Multiplicar la altura en centímetros por 6.25.
                La altura también afecta la cantidad de energía requerida por el cuerpo en reposo.
                Edad (años):
                Multiplicar la edad en años por 5.
                La edad influye en la TMB porque las necesidades energéticas
                cambian a lo largo de la vida. Generalmente, la TMB disminuye con la edad.</strong></p> <br>
            
                <p><strong> Constantes:
                Para hombres, se suma 5.
                Para mujeres, se resta 161.
                Estas constantes ajustan la fórmula para reflejar las diferencias
                promedio en la TMB entre hombres y mujeres debido a factores fisiológicos como la composición 
                corporal y el metabolismo</strong></p>
        </div>
        <div class="contenedorcalcu" class="oeform">
            <form id="caloria-form">
                <label for="años">Edad: </label>
                <input type="number" id="años" name="años" required><br>

                <label for="genero">Género: </label>


                <select name="genero" id="genero" required>
                    <option value="macho">Masculino</option>
                    <option value="hembra">Femenino</option>
                </select><br>

                <label for="peso">Peso (kg): </label>
                <input type="number" id="peso" required><br>

                <label for="altura">Altura (cm): </label>
                <input type="number" id="altura" required><br>

                <label for="actividad">Nivel de actividad: </label>
                <select id="actividad" required>


                    <option value="sedentario">Sedentario</option>
                    <option value="ligero">Ligero</option>
                    <option value="moderado">Moderado</option>
                    <option value="activo">Activo</option>
                    <option value="muy_activo">Muy activo</option>

                </select><br>

                <label for="objetivo">Objetivo: </label>
                <select id="objetivo" required>

                    <option value="mantener">Mantener peso</option>
                    <option value="ganar">Ganar peso</option>
                    <option value="perder">Perder peso</option>

                </select><br>

                <button type="button" onclick="calcularCalo(event)" id="btnCalcular">Calcular calorías</button>

                
            <div id="resultado"></div>
            </form>
        </div>
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
    </section>
    <script src="App/Assets/JS/Tienda/main.js"></script>
    <script src="App/Assets/JS/Tienda/nav.js"></script>
    <script src="App/Assets/JS/Tienda/carrito.js"></script>
    <script src="https://kit.fontawesome.com/5714a607c8.js" crossorigin="anonymous"></script>
    <script src="App/Assets/JS/CALORICA/caloricascript.js"></script>
</body>
</html>
