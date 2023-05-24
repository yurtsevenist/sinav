@extends('layouts.master')
@section('title','Profil Bilgilerim')
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
              <li class="breadcrumb-item"><a href="@if(Auth::user()->who==0) {{route('homeuser')}} @else {{route('home')}} @endif">Anasayfa</a></li>
              <li class="breadcrumb-item active">Profil Bilgilerim</li> 
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="card col-6 offset-3">
            <div class="card-header text-center">
                <h5>Profil Bilgilerim</h5>
            </div>
             <div class="card-body">
                <form action="#" method="post">
                    @csrf
                    @include('errors')
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="name" value="Adım Soyadım">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" name="email" value="ornek@ornek.com">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" name="password" placeholder="Şifreniz">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" name="password_confirmation" placeholder="Şifreniz Tekrar">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                   
                   
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
                      </div>
                    
                    </div>
                  </form>
             </div>
        
          
           
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('js')
      
  @endsection
  @section('css')
      
  @endsection