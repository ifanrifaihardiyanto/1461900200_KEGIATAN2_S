<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    protected $tableSiswa = 'siswa';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function select()
    {
        $selectsiswa = Select::all();

        return view('select0200', ['selectsiswa' => $selectsiswa]);
    }

    public function selectLike()
    {
        $selectlikesiswa = DB::table('siswa')
            ->where('nama', 'like', 'DIMAS%')
            ->get();

        $selectlikesiswa2 = DB::table('siswa')
            ->where('nama', 'like', 'SITI%')
            ->get();

        return view('selectlike0200', ['selectlikesiswa' => $selectlikesiswa, 'selectlikesiswa2' => $selectlikesiswa2]);
    }

    public function selectJoin()
    {
        $dtlSiswa = DB::table('siswa')
            ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->join('absen', 'siswa.nis', '=', 'absen.nis')
            ->select('siswa.nis', 'nama', 'kelas', 'tanggal', 'absen', 'id_semester');

        $selectJoin = DB::table('semester')
            ->joinSub($dtlSiswa, 'dtlsiswa', function ($join) {
                $join->on('semester.id_semester', '=', 'dtlsiswa.id_semester');
            })->orderBy('nis', 'asc')->get();

        // print("<pre>" . print_r($selectJoin, true) . "</pre>");
        return view('selectjoin0200', ['selectjoin' => $selectJoin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
