<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Session;
use App\package;
use App\transaction;
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
                'packages.working_hours'
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
        if (session('login')) {
            $paket = DB::table('packages')
                ->select(
                    'packages.id',
                    'packages.name_pack',
                    'packages.price',
                    'packages.qty_photos',
                    'packages.qty_edit',
                    'packages.duration',
                    'packages.working_hours'
                )
                ->get();
            $data['packages'] = $paket;

            $paket = DB::table('details')
                ->select(
                    'details.id',
                    'details.location',
                    'details.price_transportation'
                )
                ->get();
            $data['details'] = $paket;
            return view('pages.form', $data);
        } else {
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
        if (session('login')) {
            $email =   Session::get('email');
            $user = User::where('email', $email)->first();
            $pack = package::find($request->get('paket'));
            $trs = new transaction();
            $trs->users_id = $user->id;
            $trs->package_id = $pack->id;
            $trs->date = $request->get('tanggal');
            $trs->dp = $request->get('dp');
            
            $trs->details_id = $request->get('lokasi');
            $trs->description = $request->get('deskripsi');
            $trs->total = ($pack->price + $request->get('biaya'))  -  $trs->dp;
            $trs->save();

            return redirect('/checkout');
        }
    }
    public function getprice($id)
    {
        $lokasi = detail::find($id);
        return response()->json($lokasi);
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

        $beli = DB::table('details')
            ->select(
                'details.id',
                'details.location'
            )
            ->get();
        $data2['details'] = $beli;



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
                'packages.working_hours'
            )
            ->get();
        $data['packages'] = $paket;
        return view('pages.form', $data);
    }
}
