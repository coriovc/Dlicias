<div>
  <ul class="ulnav navbar-nav align-items-center">
      <div class="row justify-content-center">
<!--Dashboar-->
      <li id="Dashboard"class="nav-item mr-2">
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../Dashboard/">
        <span class="material-icons-round">amp_stories</span></a>
        </div>
          
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../Dashboard/">
          <span class="mr-2 material-icons-round">amp_stories</span>
          Dashboard</a>
        </div>
      </li>
<!--Compras
      <li id="compras"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../compras/">
          <span class="material-icons-round">shopping_basket</span></a>
        </div>

        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill " href="../compras/">
          <span class="mr-2 material-icons-round">shopping_basket</span>
          Compras</a>
        </div>
      </li>-->
<!--Ventas-->
      <li id="ventas"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../Ventas/">
          <span class="material-icons-round">payment</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../Ventas/">
          <span class="mr-2 material-icons-round">payment</span>
          Ventas</a>
        </div>
      </li>
<!--Productos-->
  <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
      <li id="productos"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../productos/">
          <span class="text-primary material-icons-round">category</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../productos/">
          <span class="mr-2 material-icons-round">category</span>
          Productos</a>
        </div>
      </li>
  <?php } ?> 
<!--Inventario-->
      <li id="inventario"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-white active btn-icon " href="../Inventario/">
          <span class="text-primary material-icons-round">bubble_chart</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-white active" href="../Inventario/">
          <span class="text-primary mr-2 material-icons-round">bubble_chart</span>
          Inventario</a>
        </div>
      </li>
<!--Empleados-->
  <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
      <li id="empleados"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../empleados/">
          <span class="material-icons-round">supervised_user_circle</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../empleados/">
          <span class="mr-2 material-icons-round">supervised_user_circle</span>
          Empleados</a>
        </div>
      </li>
  <?php } ?> 
<!--Info
      <li id="info"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../info/">
          <span class="material-icons-round">info</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../info/">
          <span class="mr-2 material-icons-round">info</span>
          Info</a>
        </div>
      </li> -->
<!--Ajustes-->
      <li id="ajustes"class="nav-item mr-2">        
        <div class="d-inline d-md-none">
          <a class="btn btn-transparent-light btn-icon" href="../ajustes/">
          <span class="material-icons-round">admin_panel_settings</span></a>
        </div>
        
        <div class="d-none  d-md-inline">
          <a class="btn btn-transparent-light rounded-pill" href="../ajustes/">
          <span class="mr-2 material-icons-round">admin_panel_settings</span>
          Ajustes</a>
        </div>
      </li>   

    </div>
  </ul>
</div>
<div class="d-inline d-md-none">
<div class="mdl-tooltip tct" data-mdl-for="Dashboard">Dashboard</div>
<div class="mdl-tooltip tct" data-mdl-for="compras">Compras</div>
<div class="mdl-tooltip tct" data-mdl-for="ventas">Ventas</div>
<div class="mdl-tooltip tct" data-mdl-for="productos">Productos</div>
<div class="mdl-tooltip tct" data-mdl-for="inventario">Inventario</div>
<div class="mdl-tooltip tct" data-mdl-for="info">Acerca</div>
<div class="mdl-tooltip tct" data-mdl-for="empleados">Empleados</div>
<div class="mdl-tooltip tct" data-mdl-for="ajustes">Ajustes</div>
</div>