@extends('layouts.master')
@section('title','Kitap Listesi')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
           
        
          </div><!-- /.col -->
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('homeuser')}}">Anasayfa</a></li>
               <li class="breadcrumb-item active">Kitap Listesi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kütüphanede Kayıtlı Kitapların Listesi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Kitap Resmi</th>
                  <th>Kitap Adı</th>
                  <th>Kitap Kodu</th>
                  <th>Yazar</th>
                  <th>Yayın Tarihi</th>
                  <th>Durumu</th>                
                  <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                    @php($say=0)              
                    {{-- Örnek Veri --}}
                    <tr>
                        <td>{{$say+=1}}</td>
                        <td><img src="{{asset('back')}}/dist/img/logo3.png" width="50px" alt="" srcset=""></td>
                        <td>Web Uygulamaları Dersinden Nasıl Geçerim ?</td>
                        <td>asadffg</td>
                        <td>Mustafa Yurtseven</td>
                        <td>24/05/2023</td>
                        <td>Müsait</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm" title="Kitabı Ödünç Al"><i class="	fas fa-cart-arrow-down"></i></a>
                            <a href="#" class="btn btn-secondary btn-sm" title="Kitabı Kimde"><i class="fas fa-question"></i></a>
                            <a  class="btn btn-info btn-sm detail-click" title="Kitabı İncele"><i class="fas fa-eye"></i></a>
                            
                       </td>
                    </tr>
                    {{-- Örnek Veri --}}

                </tbody>

              </table>
             
            </div>
            <!-- /.card-body -->
          </div>
    </section>
    @include('bookdetailmodal')
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('js')
  <script>
    $(function(){
       $('.detail-click').click(function(){  
        id = $(this)[0].getAttribute('book_id');        
        $('#bookDetailModal').modal('show');
       });
    });
  </script>
  <script src="{{asset('back')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('back')}}/plugins/jszip/jszip.min.js"></script>
  <script src="{{asset('back')}}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{asset('back')}}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('back')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  @include('layouts.table')
  @endsection
  @section('css')

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 

  @endsection
