
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title>DCA | Dwi Citra Anugerah</title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->assets->outputCss() ?>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    td,
    th {
      white-space: nowrap;
      width: 1%;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="font-size: 21px;">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Register</a>
        </li>
        <li class="nav-item">

        </li>
      </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <span class="font-weight-bold brand-link"
        style="color:#343A40; text-align: center; background:#7CB1A6;">DCA</span>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= $this->url->get('pemiliktruk') ?>" class="nav-link">
                <!-- <i class="nav-icon fas fa-truck"></i> -->
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Pemilik Truk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $this->url->get('supirtruk') ?>" class="nav-link">
                <!-- <i class="nav-icon fas fa-user-tie"></i> -->
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Supir
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $this->url->get('pabrik') ?>" class="nav-link">
                <!-- <i class="nav-icon fas fa-warehouse"></i> -->
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Pabrik
                </p>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>
    <div class="content-wrapper">
      
       
    </div>
    <!-- jQuery -->
    <?= $this->assets->outputJs() ?>

</body>

</html>