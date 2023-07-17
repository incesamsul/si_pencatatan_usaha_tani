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
                            <button type="button" class="btn bg-main text-white float-right">
                                <a href="{{ URL::to('/petani/kebutuhan_pertanian/create') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-plus"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <td>kebutuhan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kebutuhan_pertanian as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <a href="{{ URL::to('/petani/kebutuhan_pertanian/edit/' . $row->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ URL::to('/petani/kebutuhan_pertanian/delete/' . $row->id) }}"
                                                method="POST" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin?')"
                                                    class="ml-2 btn btn-danger">Hapus</button>
                                            </form>

                                        </td>
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
        $('#liKebutuhanPertanian').addClass('active');
    </script>
@endsection
