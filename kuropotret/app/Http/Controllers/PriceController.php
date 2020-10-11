<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = DB::table('packages')
            ->select(
                'packages.id',
                'packages.name_pack',
                'packages.price',
                'packages.qty_photos',
                'packages.qty_edit',
                'packages.duration',
                'packages.working_hours',
                'packages.price_operational'
            )
            ->get();
        $data['packages'] = $paket;
        return view('pages.pricing', $data);
        // return view('pemasukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session('login')){
            $paket = DB::table('packages')
            ->select(
                'packages.id',
                'packages.name_pack',
                'packages.price',
                'packages.qty_photos',
                'packages.qty_edit',
                'packages.duration',
                'packages.working_hours',
                'packages.price_operational'
            )
            ->get();
        $data['packages'] = $paket;
        return view('pages.form', $data);
        }else{
            return redirect("/login");
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
        ->join('users', 'transactions.users_id', '=', 'users.id')
        ->insert([
            'packages.package_id' => $request->get('paket'),
            'transactions.date' => $request->get('tanggal'),
            'transactions.location' => $request->get('lokasi'),
            'transactions.description' => $request->get('deskripsi')
        ]);
        return redirect('/pricing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beli = DB::table('packages')
        ->select(
            'packages.id',
            'packages.name_pack'
        )
        ->get();
        $data2['packages'] = $beli;
        return view("pages.form", $data2);
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

    public function createdata()
    {
        $paket = DB::table('packages')
        ->select(
            'packages.id',
            'packages.name_pack',
            'packages.price',
            'packages.qty_photos',
            'packages.qty_edit',
            'packages.duration',
            'packages.working_hours',
            'packages.price_operational'
        )
        ->get();
        $data['packages'] = $paket;
        return view('pages.form', $data);
    }
}
