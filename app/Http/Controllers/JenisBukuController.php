<?php

namespace App\Http\Controllers;

use App\Models\JenisBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buku = DB::table('jenis_buku')->where('jenis','LIKE', "%$request->search%")->get();
        return view('0036jenisbuku.index', [
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('0036jenisbuku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = JenisBuku::create([
            'jenis' => $request->jenis,
        ]);
        return redirect('jenis-buku')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBuku $jenisBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = JenisBuku::findorfail($id);
        return view('0036jenisbuku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = [
            'jenis' => $request->jenis,
        ];

        JenisBuku::whereId($id)->update($buku);
        return redirect('jenis-buku')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JenisBuku::findorfail($id);
        $data->delete();
        return redirect('jenis-buku')->with('success', 'Data berhasil dihapus');
    }
}
