@extends('admin.layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row" style="margin:20px">
    
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $patientsCount }}</h3>

                    <p>TOTAL Patients</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
               
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $vaccineCount }}</h3>

                    <p>TOTAL Vaccines</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
               
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $agentsCount }}</h3>

                    <p>TOTAL Agents</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
               
            </div>
          </div>
          <!-- ./col -->
         
        </div>
    <!-- /.content -->





  
@endsection