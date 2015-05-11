<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Sistema de Seguridad Integral" content="">
    <meta name="SICND" content="">

    <title>SICND Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="themes/sb-admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->

    <link rel="stylesheet" href="themes/sb-admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SICND ADMINISTRATIVO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i> ADM <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=reg-grupoytiempo"> Registro de Grupos y Horarios </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=ctrl-zona-tiempo"> Control de Horarios </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=reg-grupo"> Registro de Grupos </a></li>
              </ul>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-font"></i> Carnetizacion Plantillas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=carnet-plantilla"><i class="fa fa-font"></i> Plantillas de Carnet </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=carnet-departamento"> Carnet para Departamentos </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=carnet-cargo"> Carnet para Cargos </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=carnet-grupoytiempo"> Carnet para Grupos y tiempo </a></li>
              </ul>
              <li class="dropdown">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Carnetizacion <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=carnet-empleado"><i class="fa fa-user"></i> Carnet Empleado </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=carnet-visitante"><i class="fa fa-caret-square-o-down"></i> Carnet Visitantes </a></li>
              </ul>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Control Horario <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=ctrl-visitantes"> Control de Visitas </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=ctrl-horario"> Control Horario de Empleados </a></li>
              </ul>
            </li>  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Control de Acceso <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=ctrl-usuario"> Control Usuario </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=mempleados"> Empleados </a></li>
                <li><a href="/sicnd/frontend/web/index.php?r=user"><span class="label label-danger"> Usuarios</a></li>
              </ul>
            </li>  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Control de Visitantes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/sicnd/backend/web/index.php?r=reg-visitantes"> Registro de Visitantes </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=ctrl-visitantes/create"> Registro de Visitas </a></li>
                <li><a href="/sicnd/backend/web/index.php?r=motivos"><i class="fa fa-edit"></i> Motivo de Visitas </a></li>
              </ul>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            
            <li class="dropdown user-dropdown">
              <a href="#" data-toggle="dropdown"><i class="fa fa-user"></i> Control Usuario</a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li><a href="http://localhost/sicnd/frontend/web/index.php" class="dropdown-toggle"><i class="fa fa-power-off"></i> Salir Administrativo</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    </div><!-- /#wrapper -->
  </body>