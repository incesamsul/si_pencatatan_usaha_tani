@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data </h4>
                        <div class="table-tools d-flex justify-content-around ">
                            <button type="button" class="btn bg-main text-white float-right">
                                <a href="{{ URL::to('/petani/kebutuhan_pertanian') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/petani/kebutuhan_pertanian') }}" method="POST">
                            @if ($edit)
                                @method('PUT')
                            @endif
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control"
                                    value="{{ $edit ? $edit->id : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <textarea class="form-control" name="name" id="name" cols="30" rows="10">{{ $edit ? $edit->name : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="number d-flex">
                                    <span class="btn btn-secondary minus">-</span>
                                    <input name="qty" class="form-control col-sm-1 mx-2" type="text"
                                        value="1" />
                                    <span class="btn btn-secondary plus">+</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
        $('#li').addClass('active');
        $('#liKebutuhanPertanian').addClass('active');
    </script>
@endsection
