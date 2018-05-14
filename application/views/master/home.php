@extends('master.layouts.master')

@section('title','Dashboard - Master AzZahra')

@section('content')
  <!-- Home Section start -->
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-10 col-md-offset-1 funfact-box">
              <div class="card-panel white">
                <h3 class="dashboard-title">Dashboard</h3>
                <div class="row dashboard-menu center-align">
                  <div class="col-xs-6">
                    <a href="{{route('master.pegawai')}}">
                    <i class="fa fa-user-circle-o fa-fw "></i>
                    <h3 class="menu-title">Pegawai</h3>
                    </a>
                  </div>

                  <div class="col-xs-6">
                    <a href="{{route('master.service')}}">
                    <i class="fa fa-server fa-fw "></i>
                    <h3 class="menu-title">Layanan</h3>
                    </a>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- .container end -->
    </div>
  </section>
    <!-- #home Section end -->
@endsection
