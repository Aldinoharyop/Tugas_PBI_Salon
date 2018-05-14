
<html>
<head>
<title>About</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salon Muslimah</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon-->
  <img src="<?php echo base_url() ?>/asset/images/favicon.ico" />


  <!-- WebUI PopOver Plugin -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/webuipopover/jquery.webui-popover.css" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/font/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/materialize/css/materialize.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/bootstrap.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/animate.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/sweetalert/sweet-alert.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.carousel.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.transitions.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.theme.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/main.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/responsive.css" />

  <!-- Choose your default colors -->
  <!-- colors/colorX.css replace X with 1-8 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/colors/color1.css" />

  <script src="<?php echo base_url() ?>asset/materialx/js/html5shiv.js" /></script>
</head>
<body>
  <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="<?php echo base_url() ?>" class="left brand-logo menu-smooth-scroll" data-section="#home">
                    <img src="<?php echo base_url() ?>asset/images/logo.jpg" alt="" />
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="mdi-navigation-menu"></i>
                  </a>
                  <ul class="right static-menu">

                    <li>
                      <a href="<?php echo base_url()?>index.php/About" data-section="#about" class="menu-smooth-scroll">
                        <i class="fa fa-user fa-fw"></i>Tentang Kami</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url()?>index.php/Service" data-section="#services" class="menu-smooth-scroll">
                        <i class="fa fa-list fa-fw"></i>Layanan</a>
                    </li>
                    <li>
                      <a href="#" data-section="#bundles" class="menu-smooth-scroll">
                        <i class="fa fa-list fa-fw"></i>Paket</a>
                    </li>
                    <li>
                      <a href="#" data-section="#testimonial" class="menu-smooth-scroll">
                        <i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li>
                    <li>
                      <a href="#" data-section="#contact" class="menu-smooth-scroll">
                        <i class="fa fa-phone-square fa-fw"></i>Contact</a>
                    </li>
                    <li>
                      <a href="{{ route('reservation') }}">
                        <i class="fa fa-handshake-o fa-fw"></i>Reservasi</a>
                    </li>
                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>

                  <ul class="inline-menu side-nav" id="mobile-demo">

                    <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                      <div class="profile-inner">
                        <div class="pp-container">
                          <img src="<?php echo base_url() ?>asset/favicon.ico" alt="" />
                        </div>
                        <h3>Az Zahra</h3>
                        <h5>Muslimah Salon and Spa</h5>
                      </div>
                    </li>
                    <!-- mini profile end-->
                    </ul>
    </header>

 
  <!-- Home Section start -->
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-10 col-md-offset-1 funfact-box">
              <div class="card-panel white">
                <h3 class="dashboard-title">Reservasi</h3>

                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <label>Tanggal Reservasi</label>
                    <input type="date" name="date" class="datepicker grey-text text-darken-1">
                  </div>
                </div>

                <div style="margin-top:24px">
                  <table class="table bordered grey-text text-darken-3">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jam</th>
                        <th>Customer</th>
                        <th>Pegawai</th>
                        <th>Layanan</th>
                        <th>Paket</th>
                        <th>Konfirmasi</th>
                      </tr>
                    </thead>
                    <tbody id="reservation-table">

                    </tbody>
                </div>
                </table>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- .container end -->
    </div>
  </section>
    <!-- #home Section end -->

  <link rel="stylesheet" href="{{ asset('css/materialtable.css') }}">

  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      firstDay: 1,
      min: new Date(2015,3,20),
      disable: [0],
      formatSubmit: 'yyyy-mm-dd',
    });
  </script>
  {{-- Date Picker --}}

  <script type="text/javascript">
    $(document).ready(function(){

      //Memilih Tanggal
      $('input[name="date"]').on('change',function(){
         var tanggal=$('input[name="date_submit"]').val();
         if(tanggal) {
           console.log(tanggal);
             $.ajax({
               type:'get',
               url:'{!!URL::to('admin/findReservation')!!}',
               data:{'tanggal':tanggal},
               dataType: "json",
               success:function(data) {
                 console.log(data);
                 $('#reservation-table').empty().html();
                 $.each(data, function(index, element) {
                   if(element.service){
                      var $tr = $('<tr>').append(
                          $('<td>').text(element.id_reservasi),
                          $('<td>').text(element.jamreservasi.start),
                          $('<td>').text(element.customer.nama),
                          $('<td>').text(element.pegawai.nama),
                          $('<td>').text(element.service.nama),
                          $('<td>').text("-"),
                          $('<td>').append("<a href={!!URL::to('admin/reservationConfirm/')!!}/"+ element.id_reservasi +"><button class='btn waves-effect waves-light brand-bg white-text' name='action'>OK</button></a>"),
                      ).appendTo('#reservation-table');
                    }else if(element.bundle){
                      var $tr = $('<tr>').append(
                          $('<td>').text(element.id_reservasi),
                          $('<td>').text(element.jamreservasi.start),
                          $('<td>').text(element.customer.nama),
                          $('<td>').text(element.pegawai.nama),
                          $('<td>').text("-"),
                          $('<td>').text(element.bundle.nama),
                          $('<td>').append("<a href={!!URL::to('admin/reservationConfirm/')!!}/"+ element.id_reservasi +"><button class='btn waves-effect waves-light brand-bg white-text' name='action'>OK</button></a>"),
                      ).appendTo('#reservation-table');
                    }
                  });
             }
             });
         }else{
             $('select[name="jam"]').empty();
         }

     });
     //
    });
  </script>

</body>
</html>