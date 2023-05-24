@extends('layouts.master')
@section('title','Yönetici Anasayfa')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Anasayfa</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-4">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>400</h3>
              <p>Toplam Kitap Sayısı</p>
            </div>
            <div class="icon">
              <i class="fas fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">
              Daha Fazla<i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-4">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>45</h3>
              <p>Ödünç Verilmiş Kitap Sayısı</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                Daha Fazla<i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-4">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>200</h3>
              <p>Toplam Kullanıcı Sayısı</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                Daha Fazla<i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
  <!-- ./col -->  
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('js')
      
  @endsection
  @section('css')
      
  @endsection