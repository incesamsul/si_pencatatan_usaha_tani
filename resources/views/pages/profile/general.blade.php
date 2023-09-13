<div class="row">
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-header">
                <h4>Profile Pengguna</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                        <div class="media-body text-center">
                            <img src="{{ auth()->user()->foto == '' ? asset('stisla/assets/img/avatar/avatar-1.png') : asset('data/foto_profile/' . auth()->user()->foto . '/' . auth()->user()->foto) }}"
                                alt="" class="rounded-circle mb-2" width="100">
                            <div class="media-title"></div>
                            <div class="font-weight-600 text-muted text-small"></div>
                            <div class="font-weight-600 text-muted text-small">{{ auth()->user()->name }}</div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <a href="" class="btn bg-main text-white btn-lg btn-block btn-icon-split"
                                data-toggle="modal" data-target="#modal">
                                <i class="fas fa-camera"></i> Ganti Foto Profile
                            </a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">general</div>
                            </div>
                            <div class="media-title">Jenis Profile</div>
                        </div>
                    </li>
                    {{-- <li class="media">
              <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small"><i class="badge badge-danger">Tidak Aktif</i></div></div>
                  <div class="media-title">Bot Telegram</div>
              </div>
            </li> --}}
                    <li class="media">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">{{ auth()->user()->created_at }}
                                </div>
                            </div>
                            <div class="media-title">Tanggal Dibuat</div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ganti Kata sandi"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn bg-main text-white" type="button">Ganti</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="media">
                <div class="media-body">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Aktivasi Bot Telegram</label>
                      <input type="foto" class="form-control" id="exampleFormControlInput1" placeholder="ID Telegram">
                    </div>
                </div>
              </li>
              <p>Bot Telegram SIAKAD STMIK AKBA
                  Aktifkan fitur Bot Telegram dengan mendaftarkan ID Telegram Anda. Fitur ini akan memberikan layanan notifikasi dan akses perintah SIAKAD STMIK AKBA melalui aplikasi Telegram. Klik SASiakadBot untuk menjalankan bot ini.</p> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                <h4>Detail Profile</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <div class="media-body text-center">
                                <img src="{{ auth()->user()->foto == '' ? asset('stisla/assets/img/avatar/avatar-1.png') : asset('data/foto_profile/' . auth()->user()->foto . '/' . auth()->user()->foto) }}"
                                    alt="" class="rounded-circle mb-2" width="200">
                                <div class="media-title"></div>
                                <div class="font-weight-600 text-muted text-small"></div>
                                <div class="font-weight-600 text-muted text-small">{{ auth()->user()->name }}</div>
                            </div>
                        </li>
                        <form action="{{ URL::to('/update_user_profile') }}" method="POST">
                            @csrf
                            <li class="media">
                                <div class="media-body">
                                    @if ($user)
                                        <table class="table table-striped">
                                            <tr>
                                                <td class="bg-soft-primary">Nama</td>
                                                <td><input type="text" class="form-control"
                                                        value="{{ $user->name }}" name="name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-soft-primary">email</td>
                                                <td><input type="text" class="form-control"
                                                        value="{{ $user->email }}" name="email">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-soft-primary">role</td>
                                                <td><input readonly type="text" class="form-control"
                                                        value="{{ $user->role }}" name="role">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-soft-primary">jenis kelamin</td>
                                                <td><input type="text" class="form-control" value="laki-laki"
                                                        name="role">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-soft-primary">no hp</td>
                                                <td><input type="text" class="form-control" value="0895324670360"
                                                        name="role">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-soft-primary">alamat</td>
                                                <td><input type="text" class="form-control" value="makassar"
                                                        name="role">
                                                </td>
                                            </tr>
                                        </table>
                                        {{-- <div class="alert alert-info">silahkan hubungi admin jika terdapat kesalahan data
                                    </div> --}}
                                    @else
                                        {{-- <div class="alert alert-warning">Belum ada data user, untuk lebih lanjut hubungi
                                        admin</div> --}}
                                    @endif
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <button type="submit"
                                        class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                                        <i class="fas fa-save"></i>
                                        Simpan</button>

                                    {{-- <a href="" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                                    <i class="fas fa-pen"></i> Edit Biodata
                                </a>  --}}
                                </div>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
