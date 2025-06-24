<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>  
  <nav class="nav-extended teal darken-4">
    <div class="nav-wrapper" style="height: 90px;">
      
      <!-- Logo a la izquierda -->
      <a href="#" class="brand-logo" style="padding-left: 20px; height: 100%; display: flex; align-items: center;">
        <img src="/Sofware-Otimar-SAS-main/Img/logo_otimar.png" alt="Logo" style="height: 70px;">
      </a>


      <!-- Menú a la derecha -->
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="line-height: 90px;">
        <li><a href="/Sofware-Otimar-SAS-main/index.php">Inicio</a></li>
        <li><a href="/Sofware-Otimar-SAS-main/pages/FormReservaVuelo.html">Reserva tu vuelo</a></li>
        <li><a href="#">Mis viajes</a></li>
        <li><a href="/Sofware-Otimar-SAS-main/pages/indextarapaca.php">Blogs</a></li>
        <li><a href="/Sofware-Otimar-SAS-main/pages/Bienvenida.php">Contacto</a></li>

        <?php if (isset($_SESSION['usuario'])): ?>
          <!-- Perfil tipo círculo con inicial -->
          <li style="display: flex; align-items: center;">
            <a class="dropdown-trigger white-text" href="#!" data-target="dropdown-perfil">
              <?= htmlspecialchars($_SESSION['usuario']) ?> <i class="material-icons right">arrow_drop_down</i>
            </a>
            <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #ffeb3b; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #0d47a1; margin-right: 10px;">
              <?= strtoupper(substr($_SESSION['usuario'], 0, 1)) ?>
            </div>
          </li>

          <!-- Dropdown del perfil -->
          <ul id="dropdown-perfil" class="dropdown-content">
            <li><a href="/Sofware-Otimar-SAS-main/pages/FormPerfil.php">Mi perfil</a></li>
            <li class="divider"></li>
            <li><a href="php/logout.php">Cerrar sesión</a></li>
          </ul>

        <?php else: ?>
          <li><a href="pages/Formlogin.php">Iniciar sesión</a></li>
          <li><a href="pages/Formularioinicio.php">Registrarse</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <!-- Inicializa dropdown de Materialize -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(elems, {
        constrainWidth: false,
        coverTrigger: false
      });
    });
  </script>
