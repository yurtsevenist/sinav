  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
    
      <b class="brand-text text-center">Web Uygulamaları</b>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('back')}}/dist/img/logo3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
                      <h6 class="d-block text-white text-center">{{Auth::user()->name}}</h6>       

        </div>



      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search" title="Menü içinde arama yapabilirsiniz!">
          <input class="form-control form-control-sidebar" type="search" placeholder="Ara" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar" style="width:40px!important;margin-top:0!important;height:38px;margin-bottom:0!important;">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
                 {{--  Yönetici Menü başlangıç --}}          
                 <li class="nav-header">YÖNETİCİ MENÜ</li>
               <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link @if(Request::segment(1) == 'home') active @endif">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   Yönetici Anasayfa            
                  </p>
                </a>
              </li>    
              <li class="nav-item">
                <a href="{{route('books')}}" class="nav-link @if(Request::segment(1) == 'books') active @endif">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                   Kitap Listesi            
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{route('addbook')}}" class="nav-link @if(Request::segment(1) == 'addbook') active @endif">
                  <i class="nav-icon fas fa-book-medical"></i>
                  <p>
                   Kitap Ekle            
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link @if(Request::segment(1) == 'users') active @endif">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                   Kullanıcı Listesi          
                  </p>
                </a>
              </li>
              {{-- Yönetici Menü sonu --}}

              {{-- Kullanıcı Menü Başlangıç --}}
              <li class="nav-header">KULLANICI MENÜ</li>
              <li class="nav-item">
                <a href="{{route('homeuser')}}" class="nav-link  @if(Request::segment(1) == 'homeuser') active @endif">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   Kullancı Anasayfa                   
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('userbooks')}}" class="nav-link  @if(Request::segment(1) == 'userbooks') active @endif">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                  Kitap Listesi                  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mybooks')}}" class="nav-link  @if(Request::segment(1) == 'mybooks') active @endif">
                  <i class="nav-icon fas fa-book-reader"></i>
                  <p>
                   Kitaplarım                   
                  </p>
                </a>
              </li>
              {{-- Kullanıcı Menü Sonu --}}
              {{-- Ortak Menü Başlangıç --}}
              <li class="nav-header">ORTAK MENÜ</li>
           <li class="nav-item">
                <a href="{{route('profil')}}" class="nav-link @if(Request::segment(1) == 'profil') active @endif">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    Profil Ayarları
                   
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-door-open"></i>
                  <p>
                    Oturum Kapat                   
                  </p>
                </a>
              </li>
              {{-- Ortak Menü Sonu --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
