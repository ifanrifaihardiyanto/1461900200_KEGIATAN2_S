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
