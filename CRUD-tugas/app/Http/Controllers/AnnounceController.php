<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Announce::all();
        return view('list-data',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-data');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'nrp' => 'required|numeric',
            'tahunmasuk' => 'required|numeric',
            'semester' => 'required|numeric|min:1|max:8',
            'jurusan' => 'required|max:100',
            'ips' => 'required|digits_between:2,4:',
            'ipk' => 'required|digits_between:2,4:'
        ]);
        Announce::create($validatedData);
        return redirect()->route('home')->with('tambah_data', 'Penambahan Data Mahasiswa berhasil');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Announce::where('id', $id)->first();
        return view('detail-data',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Announce::where('id', $id)->first();
        return view('edit-data',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'nrp' => 'required|numeric',
            'tahunmasuk' => 'required|numeric',
            'semester' => 'required|numeric|min:1|max:8',
            'jurusan' => 'required|max:100',
            'ips' => 'required|digits_between:2,4:',
            'ipk' => 'required|digits_between:2,4:'
        ]);
        $announces = Announce::findOrFail($id);
        $announces->update($validatedData);
        return redirect()->route('home')->with('edit_data', 'Pengeditan Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announces = Announce::findOrFail($id);
        $announces->delete();
        return redirect()->route('home')->with('hapus_data', 'Pengeditan Data Berhasil');
    }
}
