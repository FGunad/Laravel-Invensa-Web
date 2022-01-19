<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;
use App\Models\level;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyWord = $request->keyWord;

        $level = level::select('nama_level')->get();

        $result = petugas::join('level', 'petugas.id_level', '=', 'level.id_level')
        ->select('id_petugas', 'nama_petugas', 'username', 'nama_level')
        ->orderBy('id_petugas')
        ->paginate(25);
        return view('petugas.index', ['data'=>$result, 'level'=>$level]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level = level::select()->get();
        return view('petugas.create', ['level'=>$level]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required|between:3,100',
            'username' => 'required|between:3,100|alpha_dash|unique:petugas',
            'password' => 'required|min:4|confirmed'
        ]);
        $id_level = level::select('id_level')->where('nama_level', $request->level)->get();
        foreach ($id_level as $id_level) {

            Petugas::create([
                'nama_petugas' => $request->nama_petugas,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'id_level' => $id_level->id_level,
            ]);

            return redirect()->route('petugas.index')->with('success', 'store');
        }
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
    public function destroy(Petugas $petuga)
    {
        $petuga->delete();
        return redirect()->route('petugas.index')->with('success', 'destroy');
    }
}
