@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data </h4>
                        <div class="table-tools d-flex justify-content-around ">
                            <input type="text" class="form-control card-form-header mr-3" placeholder="Cari Data  ..."
                                id="cari-data">

                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <td>jumlah</td>
                                    <td>keterangan</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>Rp. {{ number_format($row->jumlah) }}</td>
                                        <td>{{ $row->keterangan }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#li').addClass('active');
        $('#limodal').addClass('active');
    </script>
@endsection
