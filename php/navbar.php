<nav class="navbar navbar-expand navbar-white fixed-top bg-white shadow-lg">
            
    <div class="nav-item dropdown dropdown-xl no-caret">
        <div class="shadow-lg"><img src="../../imagenes/logo/logo-dark-deli.png" style="position: absolute;width: 100px;margin-top: -1.5rem;">
        </div>
    </div>

        <!--<form class="d-none d-sm-inline-block form-inline mw-100 navbar-search" style="margin-left: 8rem;">
            <input class="search" type="search" placeholder="Buscar...">
        </form>-->
        
            <ul class="navbar-nav align-items-center ml-auto">
            
            <li class="nav-item mr-3 no-caret" data-aos="fade-left" data-aos-delay="200">                    
                <button class="btn btn-transparent-dark rounded-pill btn-sm" id="fecha"><!--<span class="material-icons-round">query_builder</span>-->
                    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/kbtmbyzy.json"
                            trigger="loop"
                            delay="5000"
                            colors="primary:#b4b4b4,secondary:#f73636"
                            stroke="100"
                            scale="60"
                            style="width:35px;height:35px">
                        </lord-icon>
                    <strong class="ml-1" id="clock"></strong></button> 
            </li>
            <div class="mdl-tooltip" data-mdl-for="fecha"><strong id="date"></strong></div>
                 
                                
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons-round">notifications</span></a>
                    
                <?php 
                $not = '';
                require_once '../../controladores/cita.php';
                require_once '../../controladores/producto.php';
                $toto =  totalDia(date('Y-m-d'));
                if($toto>=480)
                $not .='<a class="dropdown-item dropdown-notifications-item" href="citas_listado.php"><div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Cupo de citas cerrado para hoy</div>
                            </div>
                        </a>';
                $citasHoy =  listarCitasDia();
                if($citasHoy>0)
                $not .='<a class="dropdown-item dropdown-notifications-item" href="citas_listado.php"><div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">'.$citasHoy.' citas para hoy</div>
                            </div>
                        </a>';
                $bajos =  listarProductosBajos();
                if($bajos>0)
                $not .='<a class="dropdown-item dropdown-notifications-item" href="../productos/">
                            <div class="dropdown-notifications-item-icon bg-danger"><span class="material-icons-round text-white">priority_high</span></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">'.$bajos.' productos estan con bajo stock</div>
                            </div>
                        </a>';
                if($citasHoy>=0 || $toto>=480 || $bajos){
                ?>
                <?php } ?>


                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2" data-feather="bell"></i>Centro de alertas</h6>
                            
                            <?php echo $not; ?>
                        
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Ver Todas</a>
                    </div>
                </li>
               
                
                <li class="nav-item dropdown no-caret mr-3">
                    
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons-round">more_vert</span></a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in-up" aria-labelledby="userDropdown">

                        <div class="text-center">
                        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/dxjqoygy.json"
                            trigger="loop"
                            delay="4000"
                            colors="primary:#f73636,secondary:#f73636"
                            stroke="50"
                            scale="53"
                            style="width:80px;height:80px">
                        </lord-icon>
                        <div class="text-center"><strong style="text-transform: uppercase;">
                            <?php echo $_SESSION['admin']['nombre']; ?></strong>                    
                        </div>
                        <strong style="margin-top: 0.1rem;" class="text-primary"><?php echo $_SESSION['admin']['tipo_usuario']; ?></strong></div>

                        <a class="dropdown-item" href="../ayuda/" >
                          <span class="text-warning mr-2 material-icons-round">help</span>
                          Ayuda
                        </a>    
                
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="margin-top: 0.1rem;">
                        <span class="mr-2 material-icons-round">logout</span>
                          Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>