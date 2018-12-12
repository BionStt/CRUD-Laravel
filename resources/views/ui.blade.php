<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url("AdminLTE/bootstrap/css/bootstrap.min.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url("AdminLTE/lib/Font-Awesome-4.5.0/css/font-awesome.min.css") }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url("AdminLTE/lib/ionicons-2.0.1/css/ionicons.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url("AdminLTE/dist/css/AdminLTE.min.css") }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url("AdminLTE/dist/css/skins/_all-skins.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/iCheck/flat/blue.css") }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/morris/morris.css") }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/datepicker/datepicker3.css") }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/daterangepicker/daterangepicker.css") }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}">
  <!-- Bootstrap Validator CSS -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/bootstrap-validator/css/bootstrapValidator.css") }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ url("AdminLTE/plugins/iCheck/all.css") }}">
  <!-- jQuery 3.3.1 -->
  <script type="text/javascript" src="{{ url("AdminLTE/plugins/jQuery/jquery-3.3.1.min.js") }}"></script>
  <!-- jQuery Validate -->
  <script type="text/javascript" src="{{ url("AdminLTE/plugins/jQueryValidate/jquery.validate.js") }}"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url("") }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">LRV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Laravel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
              <img src="{{ url("img/profil/profil.jpg") }}" class="user-image" alt="User Image">
              <span class="hidden-xs">rizal</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="{{ url("img/profil/profil.jpg") }}" class="img-circle" alt="User Image">
                <p>Muhamad Rizal Azhari<small>Sebagai Administrator</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Pengaturan</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url("img/profil/profil.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>rizal</p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="treeview">
        <li><a href="{{ url("") }}"><i class="glyphicon glyphicon-home"></i> <span>Beranda</span></a></li>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-briefcase"></i> <span>Kelola Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url("mahasiswa") }}"><i class="glyphicon glyphicon-education"></i> <span>Data Mahasiswa</span></a></li>
          </ul>
      </li>      
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

@section('content')
@show

  <footer class="main-footer">
    <div align="center">
    <strong>Copyright &copy; 2018 <a href="https://www.instagram.com/rizal_azharii/" target="_blank" title="Link to Profile Creator">Muhamad Rizal Azhari</a></strong>. All Rights
    Reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ url("AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url("AdminLTE/lib/jquery-ui-v1.11.4.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url("AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- Morris.js charts -->
<script src="{{ url("AdminLTE/lib/raphael-v2.1.0.js") }}"></script>
<script src="{{ url("AdminLTE/plugins/morris/morris.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ url("AdminLTE/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<!-- jvectormap -->
<script src="{{ url("AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ url("AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url("AdminLTE/plugins/knob/jquery.knob.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ url("AdminLTE/lib/moment-v2.11.2.js") }}"></script>
<script src="{{ url("AdminLTE/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- datepicker -->
<script src="{{ url("AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url("AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
<!-- Slimscroll -->
<script src="{{ url("AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ url("AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ url("AdminLTE/dist/js/app.min.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url("AdminLTE/dist/js/pages/dashboard.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url("AdminLTE/dist/js/demo.js") }}"></script>
<!-- DataTables -->
<script src="{{ url("AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ url("AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
<!-- CK Editor -->
<script src="{{ url("AdminLTE/plugins/ckeditor/ckeditor.js") }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ url("AdminLTE/plugins/iCheck/icheck.min.js") }}"></script>

</body>
</html>