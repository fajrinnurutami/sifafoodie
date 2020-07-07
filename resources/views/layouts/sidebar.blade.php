 <!-- Sidebar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            
                
                             @if(Auth::user()->role == 'admin')
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Master Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href={{ url('katcat') }}>Kategori</a>
                                <a class="nav-link" href="{{ url('supplier') }}">Supplier</a>
                                <a class="nav-link" href="{{ url('waktu') }}">Waktu Pengantaran</a>
                                <a class="nav-link" href="{{ url('bank') }}">Bank Pembayaran</a>
                                <a class="nav-link" href="{{ url('catering') }}">Menu Catering</a>
                                </nav>
                            </div>
                            @endif
                            
                            <div class="sb-sidenav-menu-heading"></div>
                            
                            
                            <a class="nav-link" href="{{ url('daftar') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-utensils"></i></div>
                                Daftar Menu</a>
                            @if(Auth::user()->role == 'admin')
                            <a class="nav-link" href="{{ url('formcatering') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Pesanan Masuk</a>
                            <a class="nav-link" href="{{ url('payment') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Pembayaran</a>
                            <a class="nav-link" href="{{ url('rekap') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Rekap Pesanan</a>
                            @endif
                            <a class="nav-link" href="{{ url('formulir') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Form Pemesanan</a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        @if(empty(Auth::user()->name))
                  {{ '' }}
                @else
                  {{ Auth::user()->name }}
                @endif
                    </div>
                </nav>
            </div>
            <!-- End Sidebar -->
            