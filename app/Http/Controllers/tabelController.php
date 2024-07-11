<?php

namespace App\Http\Controllers;

use App\Models\tabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class tabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = tabel::where('ip','like', "%$katakunci%")
                ->orWhere('unit', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci%")
                ->orWhere('os', 'like', "%$katakunci%")
                ->orWhere('admin', 'like', "%$katakunci%")
                ->orWhere('toka', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        }else{
            $data = tabel::orderBy('ip', 'desc')->paginate(2);
        }
        return view('tabel.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('ip', $request->ip);
        Session::flash('unit', $request->unit);
        Session::flash('alamat', $request->alamat);
        Session::flash('os', $request->os);
        Session::flash('admin', $request->admin);
        Session::flash('toka', $request->toka);

        $request->validate([
            'ip' => 'required|unique:tabel,ip',
            'unit' => 'required',
            'alamat' => 'required',
            'os' => 'required',
            'admin' => 'required',
            'toka' => 'required',
        ], [
            'ip.required' => 'IP Address wajib diisi!',
            'ip.unique' => 'IP Address tidak boleh sama',
            'unit.required' => 'Unit wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'os.required' => 'Operating System wajib diisi!',
            'admin.required' => 'Admin wajib diisi!',
            'toka.required' => 'Toka wajib diisi!',
        ]);
        $data = [
            'ip' => $request->ip,
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'os' => $request->os,
            'admin' => $request->admin,
            'toka' => $request->toka,
        ];
        tabel::create($data);
        return redirect()->to('tabel')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = tabel::where('ip', $id)->first();
        return view('tabel.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'unit' => 'required',
            'alamat' => 'required',
            'os' => 'required',
            'admin' => 'required',
            'toka' => 'required',
        ], [
            'unit.required' => 'Unit wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'os.required' => 'Operating System wajib diisi!',
            'admin.required' => 'Admin wajib diisi!',
            'toka.required' => 'Toka wajib diisi!',
        ]);
        $data = [
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'os' => $request->os,
            'admin' => $request->admin,
            'toka' => $request->toka,
        ];
        tabel::where('ip', $id)->update($data);
        return redirect()->to('tabel')->with('success', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        tabel::where('ip', $id)->delete();
        return redirect()->to('tabel')->with('success', 'Data Berhasil dihapus!');
    }
}
