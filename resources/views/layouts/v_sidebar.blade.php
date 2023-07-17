<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Si usaha tani</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="far fa-chart-bar"></i> <span>Dashboard</span></a></li>
            <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                        class="far fa-user"></i>
                    <span>Profile</span></a></li>
            <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/bantuan') }}"><i
                        class="far fa-question-circle"></i> <span>Bantuan</span></a></li>



            @if (auth()->user()->role == 'Administrator')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Admin</li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-address-card"></i> <span>Pengguna</span></a></li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-id-card"></i> <span>Anggota petani</span></a></li>
                {{--
                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-folder"></i> <span>Daftar permintaan</span></a></li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-file-alt"></i> <span>Riwayat pengeluaran</span></a></li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-folder-open"></i> <span>laporan modal</span></a></li> --}}



                {{-- END OF MENU ADMIN --}}
            @endif


            @if (auth()->user()->role == 'petani')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Petani</li>

                <li class="" id="liKebutuhanPertanian"><a class="nav-link"
                        href="{{ URL::to('/petani/kebutuhan_pertanian') }}"><i class="far fa-folder-open"></i>
                        <span>Kebutuhan Pertanian</span></a></li>


                <li class="" id="limodal"><a class="nav-link" href="{{ URL::to('/petani/modal') }}"><i
                            class="far fa-folder"></i>
                        <span>Informasi modal </span></a></li>

                {{-- END OF MENU ADMIN --}}
            @endif


            @if (auth()->user()->role == 'investor')
                {{-- MENU ADMIN --}}
                <li class="menu-header">investor</li>

                <li class="" id="liModal"><a class="nav-link" href="{{ URL::to('/investor/modal') }}"><i
                            class="far fa-folder"></i>
                        <span>Informasi modal </span></a></li>

                <li class="" id="liKebutuhanPertanian"><a class="nav-link"
                        href="{{ URL::to('/investor/kebutuhan_pertanian') }}"><i class="far fa-folder-open"></i>
                        <span>Kebutuhan Pertanian</span></a></li>


                {{-- END OF MENU ADMIN --}}
            @endif






        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
