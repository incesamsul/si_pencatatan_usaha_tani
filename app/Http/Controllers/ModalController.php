<?php

namespace App\Http\Controllers;

use App\Models\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index()
    {
        $data['modal'] = Modal::all();
        return view('pages.modal.index', $data);
    }

    public function petani()
    {
        $data['modal'] = Modal::all();
        return view('pages.modal.petani', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.modal.create', $data);
    }

    public function edit($id)
    {

        $data['edit'] = Modal::find($id);
        return view('pages.modal.create', $data);
    }

    public function store(Request $request)
    {
        Modal::create([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/investor/modal')->with('message', 'data Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = Modal::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/investor/modal')->with('message', 'data Berhasil di update');
    }

    public function delete($id)
    {
        Modal::destroy($id);
        return redirect('/investor/modal')->with('message', 'data Berhasil di hapus');
    }
}
