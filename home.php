<?php
require 'App/Assets/PHP/funciones.php';
$select = new select();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - GymWarrior</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="App/Assets/CSS/HOME/Navbar.css">
  <link rel="stylesheet" href="App/Assets/CSS/HOME/Footer.css">
  <link rel="stylesheet" href="App/Assets/CSS/HOME/Entrenadores.css">
  <link rel="stylesheet" href="App/Assets/CSS/HOME/Contacto.css">
</head>

<body>
  <!--Nav-->
  <header class="header-nav" id="header">
    <div class="header-content">
      <div class="title-container">
        <h1 class="site-title">GYMWARRIOR</h1>
        <p class="site-description">Descubre GymWarrior: planes personalizados, entrenadores expertos y herramientas útiles como nuestras calculadoras de IMC y calorías. Únete ahora y alcanza tus metas fitness. ¡Únete hoy y alcanza tus metas fitness!</p>
      </div>
      <a href="#planes" class="btn-inscribete">Inscríbete</a>
    </div>
    
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
            <a href="calorica.php">Calórica</a>
          </li>
          <hr class="separador">
          <li class="nav__item dropdown">
            <a href="#" id="radio">
              <?php if(isset($_SESSION['id'])){
              $user = $select-> SelectuserByUser($_SESSION['id']);
              echo $user ['usuario'];
              ?> <i class="fas fa-angle-down" style="color: white;"></i> <?php
              } else {
                echo '';
              } ?>
            </a>
            
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




  <h1 class="planes-titulo" id="planes">Nuestro planes</h1>
  <div class="container">
    <div class="cartas">
      <span>
        <div class="content">
          <div class="plan-detalles">
            <h3>PLAN BRONCE</h3>
            <p>Acceso a 15 entradas</p>
            <p>Sin clases grupales</p>
            <p>Precio: $45.000</p>
            <button class="boton">Comprar</button>
          </div>
        </div>
      </span>
    </div>
    <div class="cartas">
      <span>
        <div class="content">
          <div class="plan-detalles">
            <h3>PLAN VIP</h3>
            <p>Acceso a 30 entradas</p>
            <p>Clases Grupales/opcional</p>
            <p>Precio: $70.000</p>
            <button class="boton">Comprar</button>
          </div>
        </div>
      </span>
    </div>
    <div class="cartas">
      <span>
        <div class="content">
          <div class="plan-detalles">
            <h3>PLAN GOLD</h3>
            <p>Acceso a 2 meses</p>
            <p>Clases grupales/personalizado</p>
            <p>Precio: $100.000</p>
            <button class="boton">Comprar</button>
          </div>
        </div>
      </span>
    </div>
  </div>

  <section class="section__container price__container">
    <h2 class="section__header">NUESTROS ENTRENADORES</h2>
    <p class="section__subheader">
      Cada uno de los integrantes que pertenecen a nuestro equipo, estan especializados y
      capacitados para trabajar en tu proceso !ANIMO¡ estas a un paso de pertencer a nuestra familia.
    </p>
    <div class="price__grid">
      <div class="price__card">
        <div class="price__card__content">
          <img src="App/Assets/IMG/JPG/Ronniec.png" alt="Ronnie coleman">

          <h4>Ronnie Coleman</h4>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Ganó el título de Mr. Olympia en ocho ocasiones
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Especializado en powerlifting
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Innovación en el entrenamiento
          </p>
        </div>
        <button class="btn price__btn">Reserva</button>
      </div>
      <div class="price__card">
        <div class="price__card__content">

          <img src="App/Assets/IMG/JPG/Arnoldsw.png" alt="Cin">

          <h4>Arnold Schwarzenegger</h4>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Ganó el título de Mr. Olympia en siete ocasiones
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Énfasis en la técnica
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Enfoque holístico
          </p>
        </div>
        <button class="btn price__btn">Reserva</button>
      </div>
      <div class="price__card">
        <div class="price__card__content">
          <img src="App/Assets/IMG/JPG/Tomp.png" alt="tom">
          <h4>Tom Platz</h4>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Icono del culturismo
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Intensidad y determinación
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Innovación en el entrenamiento
          </p>

        </div>
        <button class="btn price__btn">Reserva</button>
      </div>
    </div>
  </section>

  <div class="contacto">
    <h1>Información de Contacto</h1>
    <p>¡Estas a un paso de cumplir tus objetivos!</p>
  </div>

  <section class="contact-info">
    <h2>Información de Contacto</h2>
    <p>Correo Electrónico: Gymwarriors@gmail.com</p>
    <p>Celular: +57 303 333 3333</p>
  </section>

  <section class="contact-form">
    <h2>Formulario de Contacto</h2>
    <form action="procesar_formulario.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>

      <label for="motivo">Motivo de contacto:</label>
      <select id="motivo" name="motivo">
        <option value="reservacion">Reservacion</option>
        <option value="queja">Queja</option>
        <option value="reclamo">Reclamo</option>
        <option value="felicitaciones">Felicitaciones</option>
        <option value="pregunta">pregunta</option>
      </select>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
      <input type="submit" value="Enviar" formaction="../index.html">
    </form>
  </section>


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