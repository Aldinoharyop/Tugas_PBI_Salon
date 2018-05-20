
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

  <section class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
      <div class="portfolio-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="title">RESERVASi</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </div>


  <div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 funfact-box">
      <div class="card-panel white">
        <div style="padding:20px;">
          <form action="{{ route('reservation.submit') }}" method="post">
            {{ csrf_field() }}

            <label>Cabang</label>
            <select class="browser-default" name="cabang">
              <option value="" disabled selected>Pilih Cabang Salon</option>
              @foreach ($cabang as $cabang)
                <option value="{{ $cabang->kodeCabang}}">{{$cabang->nama}}</option>
              @endforeach
            </select>

            <label>Pilih Layanan atau Paket</label>
            <select class="browser-default" name="serviceorbundle">
              <option value="" disabled selected>Pilih Layanan atau Paket</option>
              <option value="service">Layanan</option>
              <option value="bundle">Paket</option>
            </select>

            <div id="category" style="display:none;">
              <label>Category</label>
              <select class="browser-default" name="category">
                <option value="" disabled selected>Pilih Category Layanan</option>
                @foreach ($category as $category)
                  <option value="{{$category->id_category}}">{{$category->nama}}</option>
                @endforeach
              </select>
            </div>

            <div id="service" style="display:none;">
              <label>Layanan</label>
              <select class="browser-default" name="service">
                <option value="" disabled selected></option>
              </select>
            </div>

                        <div id="bundle" style="display:none;">
              <label>Paket</label>
              <select class="browser-default" name="bundle">
                <option value="" disabled selected>Pilih Paket</option>
                @foreach ($bundle as $bundle)
                  <option value="{{$bundle->id_bundle}}">{{$bundle->nama}}</option>
                @endforeach
              </select>
            </div>

            <label>Pegawai</label>
            <select class="browser-default" name="pegawai">
              <option value="" disabled selected></option>
            </select>

            <label>Tanggal Reservasi</label>
            <input type="date" name="date" class="datepicker">

            <label>Jam Reservasi</label>
            <select class="browser-default" name="jam">
              <option value="" disabled selected></option>
            </select>

            <button class="btn waves-effect waves-light brand-bg white-text" type="submit" name="action">Reservasi</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</section>

@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/milligram.min.css') }}">
@endsection

@section('js')
  {{-- Date Picker --}}
  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      firstDay: 1,
      formatSubmit: 'yyyy-mm-dd',
      min: new Date(),
      disable: [0]
    });
  </script>
  {{-- Date Picker --}}

  <script type="text/javascript">
    $(document).ready(function(){

      //Memilih Cabang->Memilih Pegawai
      $('select[name="cabang"]').on('change',function(){
         var cabang_id=$(this).val();
         if(cabang_id) {
             $.ajax({
               type:'get',
               url:'{!!URL::to('findPegawai')!!}',
               data:{'id':cabang_id},
               dataType: "json",
               success:function(data) {
                 $('select[name="pegawai"]').empty().html();
                 $('select[name="pegawai"]').append('<option value="" disabled selected>Pilih Pegawai</option>');
                 $.each(data, function(index, element) {
                     $('select[name="pegawai"]').append('<option value="'+ element.id_pegawai +'">'+ element.nama +'</option>');
                 });
             }
             });
         }else{
             $('select[name="pegawai"]').empty();
         }

     });
     //

     //Memilih Category->Memilih Layanan
     $('select[name="category"]').on('change',function(){
        var id=$(this).val();
        if(id) {
            $.ajax({
              type:'get',
              url:'{!!URL::to('findService')!!}',
              data:{'id':id},
              dataType: "json",
              success:function(data) {
                console.log("success");
                $('select[name="service"]').empty().html();
                $('select[name="service"]').append('<option value="" disabled selected>Pilih Layanan</option>');
                $.each(data, function(index, element) {
                    $('select[name="service"]').append('<option value="'+ element.id_service +'">'+ element.nama +'</option>');
                });
            }
            });
        }else{
            $('select[name="service"]').empty();
        }

    });
    //

     //Memilih Layanan Atau Paket
     $('select[name="serviceorbundle"]').on('change',function(){
       var value=$(this).val();
       var category = document.getElementById("category");
       var service  = document.getElementById("service");
       var bundle   = document.getElementById("bundle");
       if(value=='service'){
         category.style.display="block";
         service.style.display="block";
         bundle.style.display="none";
         $('select[name="bundle"]').val("");
       }else if(value=='bundle'){
         category.style.display="none";
         service.style.display='none';
         bundle.style.display='block';
         $('select[name="category"]').val("");
         $('select[name="service"]').empty().html();
       }
     });
     //

     //Memilih Tanggal
     $('input[name="date"]').on('change',function(){
        var tanggal=$('input[name="date_submit"]').val();
        var kodeCabang=$('select[name="cabang"]').val();
        var id_pegawai=$('select[name="pegawai"]').val();
        if(tanggal) {
          //console.log(tanggal);
            $.ajax({
              type:'get',
              url:'{!!URL::to('findTime')!!}',
              data:{'tanggal':tanggal, 'kodeCabang':kodeCabang, 'id_pegawai':id_pegawai},
              dataType: "json",
              success:function(data) {
                console.log(data);
                $('select[name="jam"]').empty().html();
                $('select[name="jam"]').append('<option value="" disabled selected>Pilih Jam</option>');
                $.each(data, function(index, element) {
                    $('select[name="jam"]').append('<option value="'+ element.id_jam +'">'+ timeFormat(element.start) +'</option>');
                });
            }
            });
        }else{
            $('select[name="jam"]').empty();
        }

    });
    //


    });

    function timeFormat($time){
      var time = $time.split(":");
      var hours = time[0]
      var minutes = time[1]
      var ampm = hours >= 12 ? 'pm' : 'am';
      hours = hours % 12;
      hours = hours ? hours : 12; // the hour '0' should be '12'
      var strTime = hours + ':' + minutes + ' ' + ampm;
      return strTime
    }

</script>



</body>
</html>