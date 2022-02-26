<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Dashboard</title>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/styles-2.css">
</head>
<body onload="startTime(); mostrarsaludo()">  
     <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_dash.php');
      ?>

    <header class="page-header bg-img-cover-dash overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
        <div class="container text-left" style="margin-top: 6rem;">
          <div class="row">
            <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                <h1 class="display-4 tct text-white"><strong id="txtsaludo"></strong><strong><?php echo $_SESSION['admin']['nombre']; ?></strong></h1>
                <p class="page-header-text text-white mb-0">Estamos para ayudarte</p>
                <i class="material-icons-round icon-head-dash icon-animate">emoji_people</i>
            </div>
          </div>
        </div>              
    </header>

        <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret" data-aos="fade-right" data-aos-delay="700">
                    <a class="btn btn-white rounded-pill shadow-lg dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/nocovwne.json"
                            trigger="loop"
                            delay="4000"
                            colors="primary:#151515,secondary:#f73636"
                            stroke="50"
                            scale="53"
                            style="width:40px;height:40px">
                        </lord-icon>
                    <div class="font-weight-500">Generar Informe</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i></a>
                    
                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#!">Ultimos 30 dias</a>
                            <a class="dropdown-item" href="#!">Semana Pasada</a>
                            <a class="dropdown-item" href="#!">Este Año</a>
                            <a class="dropdown-item" href="#!">Ayer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Personalizar</a>
                    </div>
                </div>          
            </div>
        </div>

                <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4">
                        
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Tabbed dashboard card example-->
                                <div class="card mb-4">
                                    <div class="card-header border-bottom">
                                        <!-- Dashboard card navigation-->
                                        <ul class="nav nav-tabs card-header-tabs" id="dashboardNav" role="tablist">
                                            <li class="nav-item me-1"><a class="nav-link active" id="overview-pill" href="#overview" data-bs-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                                            <li class="nav-item"><a class="nav-link" id="activities-pill" href="#activities" data-bs-toggle="tab" role="tab" aria-controls="activities" aria-selected="false">Activities</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="dashboardNavContent">
                                            <!-- Dashboard Tab Pane 1-->
                                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-pill">
                                                <div class="chart-area mb-4 mb-lg-0" style="height: 20rem"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                            </div>
                                            <!-- Dashboard Tab Pane 2-->
                                            <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-pill">
                                                <table id="datatablesSimple">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Event</th>
                                                            <th>Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Event</th>
                                                            <th>Time</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>01/13/20</td>
                                                            <td>
                                                                <i class="me-2 text-green" data-feather="zap"></i>
                                                                Server online
                                                            </td>
                                                            <td>1:21 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/13/20</td>
                                                            <td>
                                                                <i class="me-2 text-red" data-feather="zap-off"></i>
                                                                Server restarted
                                                            </td>
                                                            <td>1:00 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/12/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126550</a>
                                                            </td>
                                                            <td>5:45 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/12/20</td>
                                                            <td>
                                                                <i class="me-2 text-blue" data-feather="user"></i>
                                                                Valerie Luna submitted
                                                                <a href="#!">quarter four report</a>
                                                            </td>
                                                            <td>4:23 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/12/20</td>
                                                            <td>
                                                                <i class="me-2 text-yellow" data-feather="database"></i>
                                                                Database backup created
                                                            </td>
                                                            <td>3:51 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/12/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126549</a>
                                                            </td>
                                                            <td>1:22 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/11/20</td>
                                                            <td>
                                                                <i class="me-2 text-blue" data-feather="user-plus"></i>
                                                                New user created:
                                                                <a href="#!">Sam Malone</a>
                                                            </td>
                                                            <td>4:18 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/11/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126548</a>
                                                            </td>
                                                            <td>4:02 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/11/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126547</a>
                                                            </td>
                                                            <td>3:47 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/11/20</td>
                                                            <td>
                                                                <i class="me-2 text-green" data-feather="zap"></i>
                                                                Server online
                                                            </td>
                                                            <td>1:19 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/11/20</td>
                                                            <td>
                                                                <i class="me-2 text-red" data-feather="zap-off"></i>
                                                                Server restarted
                                                            </td>
                                                            <td>1:00 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/10/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126547</a>
                                                            </td>
                                                            <td>5:31 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/10/20</td>
                                                            <td>
                                                                <i class="me-2 text-purple" data-feather="shopping-cart"></i>
                                                                New order placed! Order #
                                                                <a href="#!">1126546</a>
                                                            </td>
                                                            <td>12:13 PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01/10/20</td>
                                                            <td>
                                                                <i class="me-2 text-blue" data-feather="user"></i>
                                                                Diane Chambers submitted
                                                                <a href="#!">quarter four report</a>
                                                            </td>
                                                            <td>10:56 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Illustration dashboard card example-->
                                <div class="card mb-4">
                                    <div class="card-body py-5">
                                        <div class="d-flex flex-column justify-content-center">
                                            <img class="img-fluid mb-4" src="assets/img/illustrations/data-report.svg" alt="" style="height: 10rem" />
                                            <div class="text-center px-0 px-lg-5">
                                                <h5>New reports are here! Generate custom reports now!</h5>
                                                <p class="mb-4">Our new report generation system is now online. You can start creating custom reporting for any documents available on your account.</p>
                                                <a class="btn btn-primary p-3" href="#!">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 mb-4">
                                        <!-- Dashboard activity timeline example-->
                                        <div class="card card-header-actions h-100">
                                            <div class="card-header">
                                                Recent Activity
                                                <div class="dropdown no-caret">
                                                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownMenuButton">
                                                        <h6 class="dropdown-header">Filter Activity:</h6>
                                                        <a class="dropdown-item" href="#!"><span class="badge bg-green-soft text-green my-1">Commerce</span></a>
                                                        <a class="dropdown-item" href="#!"><span class="badge bg-blue-soft text-blue my-1">Reporting</span></a>
                                                        <a class="dropdown-item" href="#!"><span class="badge bg-yellow-soft text-yellow my-1">Server</span></a>
                                                        <a class="dropdown-item" href="#!"><span class="badge bg-purple-soft text-purple my-1">Users</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="timeline timeline-xs">
                                                    <!-- Timeline Item 1-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">27 min</div>
                                                            <div class="timeline-item-marker-indicator bg-green"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            New order placed!
                                                            <a class="fw-bold text-dark" href="#!">Order #2912</a>
                                                            has been successfully placed.
                                                        </div>
                                                    </div>
                                                    <!-- Timeline Item 2-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">58 min</div>
                                                            <div class="timeline-item-marker-indicator bg-blue"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            Your
                                                            <a class="fw-bold text-dark" href="#!">weekly report</a>
                                                            has been generated and is ready to view.
                                                        </div>
                                                    </div>
                                                    <!-- Timeline Item 3-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">2 hrs</div>
                                                            <div class="timeline-item-marker-indicator bg-purple"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            New user
                                                            <a class="fw-bold text-dark" href="#!">Valerie Luna</a>
                                                            has registered
                                                        </div>
                                                    </div>
                                                    <!-- Timeline Item 4-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">1 day</div>
                                                            <div class="timeline-item-marker-indicator bg-yellow"></div>
                                                        </div>
                                                        <div class="timeline-item-content">Server activity monitor alert</div>
                                                    </div>
                                                    <!-- Timeline Item 5-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">1 day</div>
                                                            <div class="timeline-item-marker-indicator bg-green"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            New order placed!
                                                            <a class="fw-bold text-dark" href="#!">Order #2911</a>
                                                            has been successfully placed.
                                                        </div>
                                                    </div>
                                                    <!-- Timeline Item 6-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">1 day</div>
                                                            <div class="timeline-item-marker-indicator bg-purple"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            Details for
                                                            <a class="fw-bold text-dark" href="#!">Marketing and Planning Meeting</a>
                                                            have been updated.
                                                        </div>
                                                    </div>
                                                    <!-- Timeline Item 7-->
                                                    <div class="timeline-item">
                                                        <div class="timeline-item-marker">
                                                            <div class="timeline-item-marker-text">2 days</div>
                                                            <div class="timeline-item-marker-indicator bg-green"></div>
                                                        </div>
                                                        <div class="timeline-item-content">
                                                            New order placed!
                                                            <a class="fw-bold text-dark" href="#!">Order #2910</a>
                                                            has been successfully placed.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-4">
                                        <!-- Pie chart with legend example-->
                                        <div class="card h-100">
                                            <div class="card-header">Traffic Sources</div>
                                            <div class="card-body">
                                                <div class="chart-pie mb-4"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                                <div class="list-group list-group-flush">
                                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                        <div class="me-3">
                                                            <i class="fas fa-circle fa-sm me-1 text-blue"></i>
                                                            Direct
                                                        </div>
                                                        <div class="fw-500 text-dark">55%</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                        <div class="me-3">
                                                            <i class="fas fa-circle fa-sm me-1 text-purple"></i>
                                                            Social
                                                        </div>
                                                        <div class="fw-500 text-dark">15%</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                        <div class="me-3">
                                                            <i class="fas fa-circle fa-sm me-1 text-green"></i>
                                                            Referral
                                                        </div>
                                                        <div class="fw-500 text-dark">30%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-xl-6 col-xxl-12">
                                        <!-- Team members / people dashboard card example-->
                                        <div class="card mb-4">
                                            <div class="card-header">People</div>
                                            <div class="card-body">
                                                <!-- Item 1-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Sid Rooney</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople1">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 2-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-2.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Keelan Garza</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople2">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 3-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-3.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Kaia Smyth</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople3" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople3">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 4-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-4.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Kerri Kearney</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople4" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople4">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 5-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-5.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Georgina Findlay</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople5" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople5">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 6-->
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-6.png" alt="" /></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Wilf Ingram</a>
                                                            <div class="small text-muted line-height-normal">Position</div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople6" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople6">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-12">
                                        <!-- Project tracker card example-->
                                        <div class="card card-header-actions mb-4">
                                            <div class="card-header">
                                                Projects
                                                <a class="btn btn-sm btn-primary-soft text-primary" href="#!">Create New</a>
                                            </div>
                                            <div class="card-body">
                                                <!-- Progress item 1-->
                                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                                    <div class="fw-bold">Server Setup</div>
                                                    <div class="small">25%</div>
                                                </div>
                                                <div class="progress mb-3"><div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
                                                <!-- Progress item 2-->
                                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                                    <div class="fw-bold">Database Migration</div>
                                                    <div class="small">50%</div>
                                                </div>
                                                <div class="progress mb-3"><div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div>
                                                <!-- Progress item 3-->
                                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                                    <div class="fw-bold">Version Release</div>
                                                    <div class="small">75%</div>
                                                </div>
                                                <div class="progress mb-3"><div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                                <!-- Progress item 4-->
                                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                                    <div class="fw-bold">Product Listings</div>
                                                    <div class="small">100%</div>
                                                </div>
                                                <div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Illustration dashboard card example-->
                                <div class="card">
                                    <div class="card-body text-center p-5">
                                        <img class="img-fluid mb-4" src="assets/img/illustrations/team-spirit.svg" alt="" style="max-width: 16.25rem" />
                                        <h5>Team Access</h5>
                                        <p class="mb-4">Upgrade your plan to get access to team collaboration tools.</p>
                                        <a class="btn btn-primary p-3" href="#!">Upgrade</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>    

    <section class="dash-section" data-aos="fade-up" data-aos-delay="1000">
        <div class="container">
         <div class="row">
          <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?> 
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card bg-blue lift-img" href="../Venta/">
                  <div class="card-head"><span class="material-icons-round text-white">monetization_on</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-white">Venta Rapida</h3>
                          <p class="text-white">Realice una venta rapida</p><br>
                      </div>
                    </div>
                </a>
            </div>
           <?php } ?>
           <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../empleados/">
                  <div class="card-head"><span class="material-icons-round text-yellow">how_to_reg</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-yellow">Asistencia</h3>
                          <p>Registrar asitencia de hoy!</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../productos/">
                  <div class="card-head"><span class="material-icons-round text-purple">add_circle_outline</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-purple">Ingrediente</h3>
                          <p>Agregar nuevo ingrediente</p>
                      </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../productos/">
                  <div class="card-head"><span class="material-icons-round text-purple">room_service</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-purple">Servicio</h3>
                          <p>Agregar nuevo Servicio</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ventas/#seccion-2">
                  <div class="card-head"><span class="material-icons-round text-blue">person_add</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-blue">Cliente</h3>
                          <p>Agregar nuevo cliente</p>
                      </div>
                    </div>
                </a>
            </div>                  
            <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../empleados/">
                  <div class="card-head"><span class="material-icons-round text-green">people</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-green">Empleados</h3>
                          <p>Gestion de empleados</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ayuda/">                  
                  <div class="card-head"><span class="material-icons-round text-yellow">help</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-yellow">Ayuda</h3>
                          <p>Manual de usuario y mas.</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ajustes/">                  
                  <div class="card-head"><span class="material-icons-round text-red">settings</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-red">Ajustes</h3>
                          <p>Usuario, Mantenimiento, Bitacora, Papelera</p>
                      </div>
                    </div>
                </a>
            </div>
        </div>
        </div>     
    </section>
<br>

   <!--<script>
      $(document).ready(function()
      {
         $("#modalbienvenida").modal("show");
      });
    </script>-->


<div class="modal fade filter-foster" id="modalbienvenida" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="First slide">
                <div class="carousel-caption d-none tct text-white d-md-block">
                    <h5>hola amore como estas</h5>
                    <p>afasfasf</p>
                </div>
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="material-icons-round">chevron_left</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="material-icons-round">chevron_right</span>
          </a>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">
        <a href="#" data-dismiss="modal" class="tct btn btn-sm shadow shadow-lg rounded-pill btn-light">
        <strong>Entendido</strong> <i class="material-icons-round">arrow_right</i></a>
    </div>
</div>




<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php'); 
?>

<script type="text/javascript">
        function mostrarsaludo(){
          fecha = new Date(); 
          hora = fecha.getHours();
          if(hora >= 0 && hora < 12){
            texto = "Buenos Días ";}          
          if(hora >= 12 && hora < 18){
            texto = "Buenas Tardes ";}
          if(hora >= 18 && hora < 24){
            texto = "Buenas Noches ";}
          document.getElementById('txtsaludo').innerHTML = texto;}
</script>
</body>
</html>
