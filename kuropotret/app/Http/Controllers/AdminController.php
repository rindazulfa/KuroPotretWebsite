<?php

namespace App\Http\Controllers;
use App\Exports\OrderExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('email') == 'admin@gmail.com') {
            //Jmlah Pesanan
            $jumlah_produk = DB::table('transactions')->select('total')->count('total');
            $data['pesanan'] = $jumlah_produk;

            //Jumlah Paket 
            $jumlah_paket = DB::table('packages')->select('name_pack')->count('name_pack');
            $data['paket'] = $jumlah_paket;


            // Menampilkan tabel pesanan
            $packages = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
                ->join('users', 'transactions.users_id', '=', 'users.id')->get();
            $data['transactions'] = $packages;


            //Jumlah Paket 
            $jumlah_paket = DB::table('transactions')
                ->select('package_id', DB::raw('count(*) as total'))->groupBy('package_id')->get();
            $data['perpaket'] = $jumlah_paket;
            //raw = untuk kondisi diantara string dan int


            // laporan oi
            $getDataReport = DB::table('transactions')->select(DB::raw('sum(total) as `data`'),  DB::raw('YEAR(date) year, MONTH(date) month'))
                ->groupby('year', 'month')
                ->get();

            $data['report'] = $getDataReport;






            return view('admin.index', $data);
        }
        return redirect("/");
    }
    // public function export_excel()
	// {
	// 	return Excel::download(new OrderExport, 'pesanan.xlsx');
	// }

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
