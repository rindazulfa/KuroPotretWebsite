<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = DB::table('contact')
            ->select(
                'contact.id_contact',
                'contact.name',
                'contact.no_phone',
                'contact.email',
                'contact.pesan'
            )
            ->get();
        $data['contact'] = $pesan;
        return view("admin.contact.index", $data);
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
        $detail = DB::table('contact')
            ->select(
                'contact.id_contact',
                'contact.name',
                'contact.no_phone',
                'contact.email',
                'contact.pesan'
            )
            ->where('contact.id_contact', $id)
            ->first();
        return view("admin.contact.detail", ['detail' => $detail]);
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
        $delete = DB::table('contact')
            ->select(
                'contact.id_contact',
                'contact.name',
                'contact.no_phone',
                'contact.email',
                'contact.pesan'
            )
            ->where('contact.id_contact', $id);
            $delete->delete();
            return redirect()->route('contact.index');
    }
}
