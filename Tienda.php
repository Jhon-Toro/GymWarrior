<?php 
require 'App/Assets/PHP/funciones.php';
$select = new Select();
if(isset($_SESSION['id'])){
    $user = $select-> SelectuserByUser($_SESSION['id']);
} else {
    header('location: login.php');
}?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - GymWarior</title>
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Header.css">
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Main.css">
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Footer.css">
    <link rel="stylesheet" href="App/Assets/CSS/Tienda/Navbar.css">


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

    <!--Producto principal osea el header-->

    <header class="container background">
        <h1 class="main-h1">Producto en oferta</h1>
        <div class="header" id="lista-0">
            <div class="header-img">
                <img src="App/Assets/IMG/PNG/bolso.png" alt="Main-Imagen">
            </div>
            <div class="header-text">
                <h2>Adidas Defender 4</h2>
                <p>adidas Unisex Defender 4 Bolsa de Duffel Pequeña.</p>
                <a href="#" class="agregar-carrito btn-1" data-id="12">Comprar ahora</a>
            </div>
        </div>
    </header>

    <!--Seccion de productos-->
    <section class="productos container" id="lista-1">
        <h2>Suplementos</h2>

        <div class="producto-content">
            <div class="producto">
                <img src="App/Assets/IMG/PNG/TFPFusion.png" alt="TFPFusion">
                <div class="product-text">
                    <h3>TFP Fusion 5 LB</h3>
                    <p class="product-descripcion">TFP Fusion Combina Carbohidratos de rapida asimilacion, 35 Gramos de
                        Proteina 100% de Suero y 5.000 mg de Glutamina por servicio.</p>
                    <p class="precio">$119,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/smart.png" alt="Smart">
                <div class="product-text">
                    <h3>Proteína Smart 3.25 LB</h3>
                    <p class="product-descripcion">Proteina en polvo a base de harina de avena con palatinosa,
                        amilopectina, proteína de suero de leche enriquecido con vitaminas.</p>
                    <p class="precio">$79,900 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/viga.png" alt="Viga">
                <div class="product-text">
                    <h3>VIGA FITMAFIA 2 LB</h3>
                    <p class="product-descripcion">Este suplemento cuenta con ingredientes de alta calidad,
                        seleccionados para brindar un respaldo efectivo a tu entrenamiento.</p>
                    <p class="precio">$55,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/suplemento.png" alt="WHEYProtein">
                <div class="product-text">
                    <h3>Whey Protein</h3>
                    <p class="product-descripcion">Proteína Hidrolizada de Suero de Leche con Enzimas Digestivas - 2 Lb
                        (908 g).
                        Sabor a chocolate.
                    </p>
                    <p class="precio">$200,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/megaplex.png" alt="Ropa">
                <div class="product-text">
                    <h3>MEGAPLEX CREATINE POWER 2 LB</h3>
                    <p class="product-descripcion">Megaplex Creatine Power, creado por UPN, presenta una fórmula
                        avanzada diseñada para potenciar tu rendimiento físico.</p>
                    <p class="precio">$55,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/optimum.png" alt="Ropa">
                <div class="product-text">
                    <h3>CREATINE POWDER 600 GR</h3>
                    <p class="product-descripcion">La Creatina en Polvo de Optimum Nutrition ofrece una fórmula de
                        máxima pureza y calidad, respaldada por una marca líder.</p>
                    <p class="precio">$195,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al carrito</a>
                </div>
            </div>

        </div>
    </section>

    <section class="productos container" id="lista-2">
        <h2>Nuestra ropa</h2>

        <div class="producto-content">
            <div class="producto">
                <img src="App/Assets/IMG/WEBP/camiseta-sin-mangas.webp" alt="Ropa">
                <div class="product-text">
                    <h3>Camiseta Machamp</h3>
                    <p class="product-descripcion">100% algodón Oversized y Long Fit de Confección nacional Esta polera
                        le dará un giro a tu outfit de coleccionista.</p>
                    <p class="precio">$20,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="7">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/camiseta-negra.png" alt="Ropa">
                <div class="product-text">
                    <h3>Camiseta de entrenamiento</h3>
                    <p class="product-descripcion">Aleja el sudor de tu piel para una
                        evaporación más rápida, lo que te ayuda a mantenerte seco y cómodo</p>
                    <p class="precio">$30,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="8">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/zapatos.png" alt="Ropa">
                <div class="product-text">
                    <h3>Nike Air Max Tarainer 5</h3>
                    <p class="product-descripcion">Acaba tu última repetición con potencia y ruge hasta aturdir todo el
                        piso del gimnasio con el Nike Air Max Alpha Trainer 5. </p>
                    <p class="precio">$520,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="8">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/short.png" alt="Ropa">
                <div class="product-text">
                    <h3>Short hombre</h3>
                    <p class="product-descripcion">Short Entrenamiento Gimnasio Debido a su material
                        resistente y a sus costuras reforzadas.</p>
                    <p class="precio">$20,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="9">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/rodilleras.png" alt="Ropa">
                <div class="product-text">
                    <h3>Rodillera Nike</h3>
                    <p class="product-descripcion">Las rodillas son las más
                        propensas a soportar mucho estrés. Así que para eso vendemos rodilleras</p>
                    <p class="precio">$60,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="10">Agregar al carrito</a>
                </div>
            </div>

            <div class="producto">
                <img src="App/Assets/IMG/PNG/straps.png" alt="Ropa">
                <div class="product-text">
                    <h3>Lifting Straps</h3>
                    <p class="product-descripcion">Nunca más Soltarás la barra antes de tiempo.
                        Ahora podrás Enfocarte en Hacer más Reps en Peso Muerto.</p>
                    <p class="precio">$36,000 COP</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="11">Agregar al carrito</a>
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
    <script src="App/Assets/JS/Tienda/main.js"></script>
    <script src="App/Assets/JS/Tienda/nav.js"></script>
    <script src="App/Assets/JS/Tienda/carrito.js"></script>
    <script src="https://kit.fontawesome.com/5714a607c8.js" crossorigin="anonymous"></script>
</body>

</html>