 <nav style="top: 0; margin-bottom: 3%">
    <div class="nav-wrapper pink darken-4">
      <a href="indexa.php" class="brand-logo"><i class="material-icons white-text text-darken-4">home</i>Inicio</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text text-darken-4">menu</i></a>
         <ul class="right hide-on-med-and-down">
        <li><i class="material-icons left red-text text-accent-4 ">account_circle</i><b>Bienvenido <?php echo $_SESSION["usuarioactual"] ?></b></li>
        <li><a href="indexCrudUsr.php"><i class="material-icons right white-text text-darken-4">person</i>Usuarios</a></li>
        <li><a href="lugares.php"><i class="material-icons right white-text text-darken-4">place</i>Lugares</a></li>
        <li><a href="reporte.php"><i class="material-icons right white-text text-darken-4">assignment</i>Reporte</a></li>
        <li class="salir #000000 black white-text text-darken-4"><a href="../salir.php" ><i class="material-icons right">power_settings_new</i>Salir</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav pink darken-4  white-text text-darken-4" id="mobile-demo">
        <li ><a class="white-text text-darken-4" href="../indexa.php"><i class="material-icons Small  white-text text-darken-4">home</i>Inicio</a></li>
        <li><a class="white-text text-darken-4" href="indexCrudUsr.php"><i class="material-icons right white-text text-darken-4">person</i>Usuarios</a></li>
        <li><a  class="white-text text-darken-4" href="lugares.php"><i class="material-icons right white-text text-darken-4">place</i>Lugares</a></li>
        <li><a class="white-text text-darken-4" href="reporte.php"><i class="material-icons right white-text text-darken-4">assignment</i>Reporte</a></li-->
        <li class="salir black"><a class="white-text text-darken-4" href="salir.php" ><i class="material-icons right white-text text-darken-4">power_settings_new</i>Salir</a></li></a></li>
  </ul>