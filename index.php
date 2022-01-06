<!-- COMMITTED 24-07 -->
<?php
include_once './SessionInfo.php';
$stmt=("select * from result_exam_header");
include '../config/database.php';
ini_set( 'max_execution_time', 300 );




?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../<?php echo $r_Staffdata_fetch['section_logo']; ?>">
  <title>Home | SchoolZone</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pretty-checkbox/3.0.3/pretty-checkbox.css" integrity="sha512-Ja4BFx806Br/z9b1Eu0zBl9qkDZUkVpQESR9bDol5FoGWWiuTYy/m9M/YVFIWAGbqEgkYkyZxmnS0vos0ncZgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="../extra/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../extra/dist/css/skins/_all-skins.min.css">



  <link rel="stylesheet" href="../extra/dist/css/index1_style.css">


  
</head>
<body class="hold-transition skin-grey sidebar-mini skin-blue fixed-padding" onload=display_c();>

     
<div class="wrapper" style="max-height:100%">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    
      
      <span class="logo-mini"><b> <?php echo $r_Staffdata_fetch['section_name']; ?> </b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="text-transform: uppercase;"><b> Test Zone </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        
      


<!-- 
        <li class="dropdown user user-menu" style='padding-top:8px;margin-left: 10px'>

          <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius: 50px; border-color: #e08e0b;background: #2c2f31 !important ; ">
              Theme
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
            
                  <li style="background: #3987E3;height: 25px;cursor:pointer" class="themecolor" ThemeType='1'>
                    
                  </li>
                
            </ul>
          </div>
        </li> -->

        
    


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="height: 700px; min-height:1%;box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-High-Quality-Image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="text-transform: uppercase;"> <?php echo $r_Staffdata_fetch['username']; ?> <br> </p>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header" style="text-align:center;text-transform: full-width;font-size: 1.2em;color:#fff">Modules Lists</li>
        
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height:156px">
    <!-- Content Header (Page header) -->
    <section class="content-header"></section>



<!-- ======================================================================================= -->




    <div id="loader" style="display:none;"></div>
    <!-- Main content -->
    <section class="content " id="DisplayDiv">

      <!-- CONTENT -->
    </section>
    <input type="hidden" value="<?php echo $ActiveStaffLogin_Id; ?>" id="UserId">

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <!-- /.control-sidebar-menu -->
          <!-- /.control-sidebar-menu -->
        </div>
        <!-- /.tab-pane -->
        <!-- /.tab-pane -->
      </div>
    </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->



  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script> $.widget.bridge('uibutton', $.ui.button); </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>



  <script> var AdminLTEOptions = {navbarMenuHeight: "10px",}; </script>
  <script src="../extra/dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../extra/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../extra/dist/js/demo.js"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"></script>



  <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">


<link href="../assets/plugins/datatables/jquery.datatables.yadcf.css" rel="stylesheet" type="text/css"/>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
  <!-- <script src="js/vfs_fonts.js"></script> -->

<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.16/sorting/date-eu.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.min.js"></script>

<script src="../assets/plugins/datatables/jquery.dataTables.yadcf.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>

<script src="../assets/plugins/datatables/dataTables.fnGetFilteredNodes.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/api/sum().js"></script>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<!-- Date Picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="../assets/custom_css/theme_scheme.css">

  <script type="text/javascript">

    $(document).ready(function () {
      var height = $(window).height();
      var h1 = height - 68;
      var h2 = height - 60;
      $('#DisplayDiv').css('height', h1);
      $('.main-sidebar').css('min-height', h2);
    });
    $('li').click(function () {
      $('.content').scrollTop(0);
      $('.content').scrollLeft(0);

    });






    function display_c() {
      var reschoolzone = 1000; // Reschoolzone rate in milli seconds
      mytime = setTimeout('display_ct()', reschoolzone)
    }

forech(arrey_expression as $value)
 statement

    function display_ct() {
      var strcount;
      var x = new Date();
      var NewFormatDate = x.toString().slice(0, 21);
      document.getElementById('UTCtime').innerHTML = NewFormatDate;
      tt = display_c();
    }



    //reschoolzone_regularization_request_counter();
  </script>
  <script type="text/javascript">
   
    $(document).ready(function () {
      var height = $(window).height();
      var h1 = height - 20;
      var h2 = height - 30;
      $('#DisplayDiv').css('height', h1);
      $('.main-sidebar').css('min-height', h2);
    });

    $('li').click(function () {
      $('.content').scrollTop(0);
      $('.content').scrollLeft(0);
    });

    $("#loader").css("display", "block");
    $("#DisplayDiv").css("display", "none");
    jQuery.ajax({
      url: 'setup/exam_header_master.php',
      type: "POST",
      success: function (data) {
        $('#DisplayDiv').html(data);
        $("#loader").css("display", "none");
        $("#DisplayDiv").css("display", "block");
      }
    });


   
    

  </script>

</body>
</html>

<style>
.fixed-padding {
  padding-right: 0px !important;
}
</style>

<script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script>



<script>
</script>
