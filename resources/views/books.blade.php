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
            <a type="button" class="btn btn-info btn-sm" href="{{route('addbook')}}">Kitap Ekle</a>
        
          </div><!-- /.col -->
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Anasayfa</a></li>
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
              <h3 class="card-title">Kütüphanenizde Kayıtlı Kitapların Listesi</h3>
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
                  <th>Özet</th>
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
                        <td>Özet</td>
                        <td>Müsait</td>
                        <td class="text-center">
                            <a  class="btn btn-primary btn-sm edit-click" book_id="0" title="Kitabı Güncelle"><i class="fas fa-edit"></i></a>
                            <a  class="btn btn-info btn-sm history-click" book_id="0" title="Kitabı Geçmişi"><i class="fas fa-history"></i></a>
                            <a class="btn btn-danger btn-sm delete-click" book_id="0" title="Kitabı Sil"><i class="fas fa-trash-alt"></i></a>
                       </td>
                    </tr>
                    {{-- Örnek Veri --}}

                </tbody>

              </table>
             
            </div>
            <!-- /.card-body -->
          </div>
    </section>
    @include('bookeditmodal')
    @include('bookhistorymodal')
     {{-- delete book modall --}}
     <div class="modal fade" id="deleteModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-danger">Kitap Sil</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

              <p>Sisteminize kayıtlı seçmiş oldugunuz kitap silinecek, onaylıyormusunuz</p>
            </div>
            <form action="#" method="post">
             @csrf
             <input type="hidden" name="id" id="id" value="">
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
              <button type="submit" class="btn btn-danger">Onayla</button>
            </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    {{-- delete product modal end --}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('js')
   {{-- Kitap Silme Script Kodları --}}
   <script>
    $(function(){
       $('.delete-click').click(function(){  
        id = $(this)[0].getAttribute('book_id');        
            $('#deleteModal').modal('show');
       });
    });
  </script>
 {{-- Kitap Silme Script Kodları Sonu --}}
  {{-- Kitap Güncelleme Script Kodları --}}
  <script>
    $(function(){
       $('.edit-click').click(function(){  
        id = $(this)[0].getAttribute('book_id');           
            $('#bookEditModal').modal('show');
       });
    });
  </script>
  {{-- Kitap Güncelleme Script Kodları Sonu --}}

  {{-- Kitap Geçmişi Script Kodları --}}
  <script>
    $(function(){
       $('.history-click').click(function(){ 
        id = $(this)[0].getAttribute('book_id');
        $.ajax({
           type: 'GET',
                 url: '',
                 data: {
                     id: id
                 },
                 success:function(data)
                 {
                     // console.log(data);
                    $("#modalTableBody").empty();                  
                    for (var i = 0; i < 5; i++) {
                        sira=i+1;                   
                        $('#modalTableBody').append('<tr><td>' + sira +
                        '</td><td>' + "Örnek İsim Soyisim" + '</td><td>' + "12/05/2022"
                        +'</td><td>' + "15/05/2022" +  '</td></tr>');
                      }
                   
                      
                 }

         });            
        $('#bookHistoryModal').modal('show');
       });
    });
  </script>
 {{-- Kitap Geçmişi Script Kodları Sonu --}}
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
