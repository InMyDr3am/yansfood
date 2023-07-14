<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        {{-- <img src="{{ asset('zeaarabic.id.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Zeaarabic.id</span> --}}
        <img src="{{ asset('layout/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Restoku.id</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('layout/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ Auth::user()->name; }} </a> --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Umum</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penjualan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">DATA PRODUK</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-shirt"></i>
                      <p>Launching Product
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/produk/create" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Input Produk</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/bahan-baku/create" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Input Bahan Kain</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/inventory/create" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Input Inventori</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/bahan-baku" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>List Bahan Kain</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/produk" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>List Produk</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/variasi-warna" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Variasi Warna</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/variasi-ukuran" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Variasi Ukuran</p>
                        </a>
                      </li>
                      
                    </ul>
                </li>
                
                <li class="nav-header">DATA KARYAWAN</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sharp fa-solid fa-users"></i>
                    <p>
                      Karyawan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/karyawan" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Karyawan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/karyawan/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Karyawan Baru</p>
                      </a>
                    </li>
                    {{-- <li class="nav-item">
                      <a href="/karyawan/admin" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bagian Admin</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/karyawan/penjahit" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bagian Jahit</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/karyawan/bagian-gudang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bagian Gudang</p>
                      </a>
                    </li> --}}
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-user"></i>
                    <p>
                      Jabatan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/jabatan" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Jabatan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/jabatan/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Jabatan Baru</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">PENGADAAN BARANG</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-cubes"></i>
                    <p>
                      Bahan Baku Kain
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/bahan-baku/stock/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Stok Baru</p>
                      </a>
                    </li>  
                    <li class="nav-item">
                      <a href="/pengadaan-barang/belanja-bahan-baku/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Belanja Bahan Kain</p>
                      </a>
                    </li>  
                    <li class="nav-item">
                      <a href="/bahan-baku/stock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stok Bahan </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/bahan-baku/stock/total-stock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Total Stok Bahan </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/bahan-baku/stock/list-harus-restock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Bahan Menipis</p>
                      </a>
                    </li>
                    {{-- <li class="nav-item">
                      <a href="/bahan-baku/list-restock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Bahan Menipis</p>
                      </a>
                    </li>       --}}
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-shirt"></i>
                    <p>Stok Produk
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/produk/stok/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Stok Baru </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produk/stok/tambah-stok" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tambah Stok </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produk/stok/all-stok" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Stok </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produk/stok/list-restok" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Harus Restok </p>
                      </a>
                    </li>
                  </ul>
              </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-cube"></i>
                    <p>
                      Inventory 
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/pengadaan-barang/belanja-inventori/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Belanja Inventori</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/inventory" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Inventory </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/inventory/list-restock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Inventory Menipis</p>
                      </a>
                    </li>      
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-cart-shopping"></i>
                    <p>
                      Belanja
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/pengadaan-barang/belanja-bahan-baku" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Histori Bel. Bahan </p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="/pengadaan-barang/belanja-inventori" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Histori Bel. Invent</p>
                      </a>
                    </li>      
                  </ul>
                </li>
                <li class="nav-header">PRODUKSI</li>
                <li class="nav-item">
                  <a href="#" class="nav-link"> 
                    <i class="nav-icon fa-solid fa-scissors"></i>
                    <p>
                      Cutting
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/produksi/cutting/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Cutting</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produksi/cutting/on-proggress" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>On Proggress</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produksi/cutting/stok-hasil-cutting" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Stock Cutting</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produksi/cutting/all-proggress" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Data</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"> 
                    <i class="nav-icon fa-solid fa-stapler"></i>
                    <p>
                      Jahit
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/produksi/jahit/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Input Jahit</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produksi/jahit/on-proggress" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>On Proggress</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/produksi/jahit/all-proggress" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Data</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">DATA PENJUALAN</li>
                <li class="nav-item">
                  <a href="#" class="nav-link"> 
                    <i class="nav-icon fa-solid fa-file-invoice-dollar"></i>
                    <p>
                      Data Penjualan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    {{-- <li class="nav-item">
                      <a href="/penjualan/shopee" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Shopee</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/lazada" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lazada</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/tiktok" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tiktok</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/reseller" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Reseller</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/offline" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Offline</p>
                      </a>
                    </li> --}}
                    <li class="nav-item">
                      <a href="/penjualan/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Produk Terjual</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/data-retur" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Return / Pembatalan Produk</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjualan/" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Penjualan</p>
                      </a>
                    </li>
                    
                    {{-- <li class="nav-item">
                      <a href="/penjualan/total-penjualan-berdasarkan-produk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Setiap Produk</p>
                      </a>
                    </li> --}}
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sharp fa-solid fa-users"></i>
                    <p>
                      DataBase
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    {{-- <li class="nav-item">
                      <a href="/penjual/marketplace" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Marketplace</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjual/reseller" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Reseller</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/penjual/offline" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Offline</p>
                      </a>
                    </li> --}}
                    <li class="nav-item">
                      <a href="/penjual" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Data</p>
                      </a>
                    </li>
                  </ul>
                </li>
               
                {{-- <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user"></i>
                        <p>
                            Data user
                        </p>
                    </a>
                </li> --}}
                
                {{-- <li class="nav-item">
                    <a href="/belanja-bahan" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user"></i>
                        <p>
                            Data Belanja Bahan 
                        </p>
                    </a>
                </li> --}}
               
                
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        
                        <i class="nav-icon fas fa-light fa-address-card"></i>
                        <p> My Profile <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/user/{{ Auth::user()->id; }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/password/edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ganti Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-solid fa-database"></i>
                      <p>
                        Data Inputan
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/jabatan" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Jabatan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/penghasilan" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Penghasilan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/pendidikan" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pendidikan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/kelas" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Kelas</p>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
