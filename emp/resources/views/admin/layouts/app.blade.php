<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!!Html::style('admin/bootstrap/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   {!!Html::style('admin/dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    {!!Html::style('admin/dist/css/skins/_all-skins.min.css')!!}
  <!-- iCheck -->
    {!!Html::style('admin/plugins/iCheck/flat/blue.css')!!}
  
  <!-- Morris chart -->
    {!!Html::style('admin/plugins/morris/morris.css')!!}
  
  <!-- jvectormap -->
    {!!Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
  
  <!-- Date Picker -->
    {!!Html::style('admin/plugins/datepicker/datepicker3.css')!!}
  
  <!-- Daterange picker -->
    {!!Html::style('admin/plugins/daterangepicker/daterangepicker.css')!!}
  
  <!-- bootstrap wysihtml5 - text editor -->
    {!!Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}
  
    @yield('header')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
      @yield('scripts')

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <header class="main-header">
    <!-- Logo -->
    <a href="{{url('adminpanel/employees')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b>Company</span>
    </a>
       <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
 
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{Storage::url(Auth::user()->employee->image)}}" class="user-image" alt="User Image">
              {{--  <span class="hidden-xs">{{ Auth::user()->name }}</span>  --}}
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{Storage::url(Auth::user()->employee->image)}}" class="img-circle" alt="User Image">

                <p>
                  {{--  {{ Auth::user()->name }} - Web Developer
                  <small>Member since {{ Auth::user()->created_at}}</small>  --}}
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
               
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @yield('content')
  </div>

<!-- jQuery 2.2.3 -->
{!!Html::script('admin/plugins/jQuery/jquery-2.2.3.min.js')!!}

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
    {!!Html::script('admin/bootstrap/js/bootstrap.min.js')!!}
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {!!Html::script('admin/plugins/morris/morris.min.js')!!}

<!-- Sparkline -->

 {!!Html::script('admin/plugins/sparkline/jquery.sparkline.min.js')!!}
<!-- jvectormap -->
 {!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
 {!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}

<!-- jQuery Knob Chart -->
 {!!Html::script('admin/plugins/knob/jquery.knob.js')!!}
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
 {!!Html::script('admin/plugins/daterangepicker/daterangepicker.js')!!}

<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
 {!!Html::script('admin/plugins/datepicker/bootstrap-datepicker.js')!!}

<!-- Bootstrap WYSIHTML5 -->
 {!!Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}

<!-- Slimscroll -->
 {!!Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js')!!}
<!-- FastClick -->
 {!!Html::script('admin/plugins/fastclick/fastclick.js')!!}

<!-- AdminLTE App -->
 {!!Html::script('admin/dist/js/app.min.js')!!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 {!!Html::script('admin/dist/js/pages/dashboard.js')!!}

<!-- AdminLTE for demo purposes -->
 {!!Html::script('admin/dist/js/demo.js')!!}

 @yield('footer')

</body>
</html>