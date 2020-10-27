<nav class="navbar navbar-expand navbar-white fixed-top bg-white shadow-lg">
            
    <div class="nav-item dropdown dropdown-xl no-caret">
        <div class="shadow-lg"><img src="../imagenes/logo/logo-dark-deli.png" style="position: absolute;width: 100px;margin-top: -1.5rem;">
        </div>
    </div>

            <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mw-100 navbar-search" style="margin-left: 7rem;">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-nav btn-icon" type="button"><span class="material-icons-round">search</span></button>
              </div>
            </div>
          </form>
            
            <ul class="navbar-nav align-items-center ml-auto">
            
            <li class="nav-item mr-3 no-caret">                    
                <button class="btn btn-transparent-dark rounded-pill btn-sm" id="fecha"><span class="material-icons-round">query_builder</span><strong class="ml-1" id="clock"></strong></button> 
            </li>
            <div class="mdl-tooltip" data-mdl-for="fecha"><strong id="date"></strong></div>   
                 
                                
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons-round">notifications</span></a>
                    
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2" data-feather="bell"></i>Centro de alertas</h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            ><div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                                <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div></a
                        ><a class="dropdown-item dropdown-notifications-item" href="#!"
                            ><div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                                <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div></a
                        ><a class="dropdown-item dropdown-notifications-footer" href="#!">Ver Todas</a>
                    </div>
                </li>
               
                
                <li class="nav-item dropdown no-caret mr-3">
                    
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons-round">more_vert</span></a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in-up" aria-labelledby="userDropdown">

                        <div class="text-center">
                        <img class="img-profile rounded-circle" src="../imagenes/img-user.png" style="width: 5rem; margin-left: auto; margin-bottom: 1rem;">
                        <div class="text-center"><strong style="text-transform: uppercase;">
                            <!--<?php echo $value->nombre ." ". $value->apellido; ?>--> Victor Corio</strong>                    
                        </div>
                        <strong style="margin-top: 0.1rem;" class="text-primary"><!--<?php echo $value->tipo_usuario; ?>--> Administrador</strong></div>
                        
                        <a class="dropdown-item" href="ayuda.php" >
                          <span class="mr-2 material-icons-round">settings</span>
                          ajustes
                        </a> 

                        <a class="dropdown-item" href="ayuda.php" >
                          <span class="text-warning mr-2 material-icons-round">help</span>
                          Ayuda
                        </a>    
                
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="margin-top: 0.1rem;">
                        <span class="mr-2 material-icons-round">exit_to_app</span>
                          Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>