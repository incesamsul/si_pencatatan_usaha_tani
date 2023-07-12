@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Anda berada di halaman dashboard</h4>
                    </div>
                    <div class="card-body">
                        <h5>Hi, Selamat datang</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#liDashboard').addClass('active');
    </script>
@endsection
