@extends('layouts.master')
@section('title','Kitap Ekle')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a type="button" class="btn btn-info btn-sm" href="{{route('books')}}">Kitaplar</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kitap Ekle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card card-primary">
                    
                    <div class="card-body" style="display: block;">
                      <form action="#" method="POST" enctype="multipart/form-data">
                        @include('errors')
                        @csrf
                        <div class="form-group">
                            <label for="name">Kitap Resmi</label>
                            <input type="file" class="form-control" required name="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="form-group">
                            <label for="name">Kitap Adı</label>
                            <input type="text"  name="name"  class="form-control" placeholder="Kitap Adını Giriniz*">
                        </div>
                        <div class="form-group">
                            <label for="writer">Yazar Adı</label>
                            <input type="text"  name="writer"  class="form-control" placeholder="Yazar Adını Giriniz*">
                        </div>
                        <div class="form-group">
                            <label for="type">Kategori</label>
                            <select name="type" class="form-control custom-select">
                                <option selected="" disabled="">Seçim Yapınız</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="publicyear">Basım Yılı</label>
                            <input type="date"  name="publicyear"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="info">Özet</label>
                            <textarea  name="summary" class="form-control" rows="4"></textarea>
                        </div>                    
                     <button type="submit" class="btn btn-block btn-primary btn-md"> Ekle</button>
                      </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
          
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
