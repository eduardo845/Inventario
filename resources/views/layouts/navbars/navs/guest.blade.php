<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="" class="img-log"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="menu me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:8000/kardex">KARDEX</a>
        </li>
        
        <li class="menu">
          <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formularios
          </a>
          <ul class="submenu" aria-labelledby="navbarDropdown">
            <li><a  href="http://localhost:8000/nuevo">Registro de Datos</a></li>
            <li><a  href="http://localhost:8000/solicitudPedido">Solicitud de Pedido</a></li>
            <li><a  href="http://localhost:8000/entradaProductos">Entrada de Productos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8000/reporte">Reporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Salidas</a>
          <ul class="submenu" aria-labelledby="navbarDropdown">
          <li><a href="http://localhost:8000/salidaUsg">Salidas USG</a></li>
          <li><a href="#">Salidas Generales</a>
              <ul class="submenu2">
                  <li><a href="http://localhost:8000/descargas">Unidades Descargadas</a></li>
                  <li><a href="http://localhost:8000/totalProducto">Total por Unidad</a></li>
                 </ul></li> 
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8000/compras">Compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8000/ajuste">Ajustes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8000/inventario">Inventario</a>
        </li>
      </ul>
      <form class="d-flex" action="/logout" method="POST">
        @csrf
        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Salir</button>-->
        <a href="#" onclick="this.closest('form').submit()">Salir</a>
      </form>
    </div>
  </div>
</nav>