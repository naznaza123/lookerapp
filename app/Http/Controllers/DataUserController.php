<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['data_users'] =  DataUser::all();
        return view ('dashboard.datauser.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data =[
            'action' => url('datauser.store'),
            'tombol' => 'SIMPAN',
            'data_users' => (object)[
                // 'nis'=>'',
               'nama'=>'',
               'alamat_lengkap'=>'',
               'nomor_hp'=>'',
               'lulusan'=>'',
            ]
            ];
            return view ('dashboard.datauser.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DataUser::create([
            'nama'=>$request->nama,
            'alamat_lengkap'=>$request->alamat_lengkap,
            'nomor_hp'=>$request->nomor_hp,
            'lulusan'=>$request->lulusan,
        ]);
        return redirect()->route('datauser.index');
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
