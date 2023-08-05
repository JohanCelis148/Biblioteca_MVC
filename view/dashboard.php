<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Biblioteca</title>
    <link rel="stylesheet" href="../asset/css/dashboard.css">
    <link rel="shortcut icon" href="../asset/img/libro.png" type="image/x-icon">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-book-reader'></i>
      <span class="logo_name">Biblioteca</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="board.php" target="workSpace">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Tablero</span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-lock-alt' ></i>
            <span class="link_name">Seguridad</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Seguridad</a></li>
          <li><a href="seguridad/personas.php" target="workSpace">Personas</a></li>
          <li><a href="seguridad/usuarios.php" target="workSpace">Usuarios</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-package'></i>
            <span class="link_name">Inventario</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Inventario</a></li>
          <li><a href="inventario/ubicacion.html" target="workSpace">Ubicación</a></li>
          <li><a href="inventario/categoria.html" target="workSpace">Categorias</a></li>
          <li><a href="inventario/libros.html" target="workSpace">Libros</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-calculator'></i>
            <span class="link_name">Facturación</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Facturación</a></li>
          <li><a href="facturacion/post.html" target="workSpace">POS</a></li>
          <li><a href="facturacion/prestamo.html" target="workSpace">Prestamos</a></li>
          <li><a href="#">Factura</a></li>
          <li><a href="#">Detalle Factura</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-store'></i>
          <span class="link_name">Ver Tienda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Ver Tienda</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-support'></i>
          <span class="link_name">Contactar</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Contactar</a></li>
        </ul>
      </li>
      <!-- <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="../asset/img/hombre.png" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out' ></i>
        </div>
      </li>
</ul>
</div>


  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <iframe src="Board.php" class="section2" id="workSpace" name="workSpace" frameborder="0"></iframe>
  </section>
  
</body>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>
</html>