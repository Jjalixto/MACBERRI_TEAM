<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Starter Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Active Page</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Simple Link
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="col p-4 text-center">
        <h3 class="text-center text-secondary">Clientes registrados</h3>
        <a class="btn btn-primary m-2" href="registrar_clientes.php" role="button">Crear cliente</a>

        <table class="table table-hover">
          <thead class="table-primary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">nombre</th>
              <th scope="col">apellido</th>
              <th scope="col">tipo_doc</th>
              <th scope="col">nro_doc</th>
              <th scope="col">nro_tel_princ</th>
              <th scope="col">email</th>
              <th scope="col">Edit / Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../model/conexion.php";

            $buscar = "SELECT * FROM clientes";
            $resultado = pg_query($conexion, $buscar);

            while ($fila = pg_fetch_assoc($resultado)) { ?>
              <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['apellido'] ?></td>
                <td><?= $fila['tipo_doc'] ?></td>
                <td><?= $fila['nro_doc'] ?></td>
                <td><?= $fila['nro_tel_princ'] ?></td>
                <td><?= $fila['email'] ?></td>
                <td>
                  <!-- Button trigger modal -->
                  <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a>
                  <a href=""><i class="fa fa-trash"></i></a>
                </td>
              </tr>

            <?php }
            ?>
          </tbody>
        </table>

        <!-- Modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Close
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="../controller/editar.php" method="POST">
                  <div id="login">
                    <div class="container">
                      <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                          <div id="login-box" class="col-md-12">
                            <h3 class="text-center">Editar cliente</h3>
                            <?php
                            $id = $_GET["id"];
                            $consulta_id = "SELECT * FROM clientes WHERE id = $id";
                            $resultado_id = pg_query($conexion, $consulta_id);
                            $usuario_id = pg_fetch_assoc($resultado_id);
                            ?>
                            <div class="form-group">
                              <label for="nombre" class="form-label">Nombre :</label>
                              <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $usuario_id['nombre']; ?>" required>
                            </div>

                            <div class="form-group">
                              <label for="username">Apellido :</label><br>
                              <input type="text" name="apellido" id="apellido" class="form-control" value="<?=  $usuario_id['apellido']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="telefono" class="form-label">Tipo de documento :</label>
                              <input type="text" id="tipo_doc" name="tipo_doc" class="form-control" value="<?= $usuario_id['tipo_doc']; ?>" required>

                              <div class="form-group">
                                <label for="fecha">Numero de documento :</label><br>
                                <input type="text" name="nro_doc" id="nro_doc" class="form-control" value="<?=  $usuario_id['nro_doc']; ?>" required>
                              </div>

                              <div class="form-group">
                                <label for="fecha">Numero de telefono :</label><br>
                                <input type="text" name="nro_tel_princ" id="nro_tel_princ" class="form-control" value="<?=  $usuario_id['nro_tel_princ']; ?>" required>
                              </div>

                            </div>
                            <div class="form-group">
                              <label for="clave">Email :</label><br>
                              <input type="email" name="email" id="email" class="form-control" value="<?= $usuario_id['email']; ?>" required>
                            </div>

                            <div class="form-group">
                              <input type="hidden" name="accion" value="editar_registro">
                              <input type="hidden" name="id" value="<?=  $id; ?>">
                            </div>

                            <div class="mb-3">

                              <button type="submit" class="btn btn-success">Editar</button>
                              <a href="user.php" class="btn btn-danger">Cancelar</a>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
          </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
      </div>
    </div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <!-- <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

</body>

</html>