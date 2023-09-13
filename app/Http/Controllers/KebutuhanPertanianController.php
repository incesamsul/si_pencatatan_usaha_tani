<?php

namespace App\Http\Controllers;

use App\Models\KebutuhanPertanian;
use Illuminate\Http\Request;

class KebutuhanPertanianController extends Controller
{
    public function index()
    {
        $data['kebutuhan_pertanian'] = KebutuhanPertanian::where('user_id', auth()->user()->id)->get();
        return view('pages.kebutuhan_pertanian.index', $data);
    }

    public function investor()
    {
        $data['kebutuhan_pertanian'] = KebutuhanPertanian::all();
        return view('pages.kebutuhan_pertanian.investor', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.kebutuhan_pertanian.create', $data);
    }

    public function edit($id)
    {

        $data['edit'] = KebutuhanPertanian::find($id);
        return view('pages.kebutuhan_pertanian.create', $data);
    }

    public function store(Request $request)
    {
        KebutuhanPertanian::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'user_id' => auth()->user()->id,
        ]);
        return redirect('/petani/kebutuhan_pertanian')->with('message', 'data Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = KebutuhanPertanian::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'name' => $request->name,
            'qty' => $request->qty,
            'user_id' => auth()->user()->id,
        ]);
        return redirect('/petani/kebutuhan_pertanian')->with('message', 'data Berhasil di update');
    }

    public function delete($id)
    {
        KebutuhanPertanian::destroy($id);
        return redirect('/petani/kebutuhan_pertanian')->with('message', 'data Berhasil di hapus');
    }
}
