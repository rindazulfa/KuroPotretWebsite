<?php

namespace App\Http\Controllers;
use App\Exports\OrderExport;
use App\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->select(
                'transactions.id',
                'users.name',
                'packages.name_pack',
                'transactions.date',
                'transactions.status',
                'details.location',
                'details.price_transportation',
                'transactions.dp',
                'transactions.pict',
                'transactions.description',
                'transactions.total'

            )
            ->get();
        $data['transactions'] = $transaksi;
        return view("admin.order.index", $data);
    }
    public function export_excel()
	{
		return Excel::download(new OrderExport, 'order.xlsx');
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_sts(Request $request, $id)
    {
        if ($request->get('status') == 1) {
            $status = 1;
            Alert::success('Status','Diterima');
        } else {
            Alert::success('Status','Ditolak');
            $status = 2;
        }
        DB::table('transactions')
            ->where('transactions.id', $id)
            ->update([
                'transactions.status' => $status
            ]);

        return back();
        // return redirect('/order');
    }
    public function create()
    {
        // return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // ini buat form
    public function show($id)
    {

        $detail = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->select(
                'transactions.id',
                'users.name',
                'packages.name_pack',
                'transactions.date',
                'transactions.status',
                'details.location',
                'details.price_transportation',
                'transactions.dp',
                'transactions.pict',
                'transactions.description',
                'transactions.total'

            )
            ->where('transactions.id', $id)
            ->first();
        return view('admin.order.detail_order', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->select(
                'transactions.id',
                'users.name',
                'packages.name_pack',
                'transactions.date',
                'transactions.status',
                'details.location',
                'details.price_transportation',
                'transactions.dp',
                'transactions.pict',
                'transactions.description',
                'transactions.total'
            )
            ->where('transactions.id', $id)
            ->first();
        return view('admin.order.edit', ['edit' => $edit]);
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

        $getTable = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->where('transactions.id', $id);


        $getPrice = $getTable->get('packages.price')->first()->price;
        $total = $request->get('biaya_transportasi') + $getPrice - $request->get('biaya');


// HALOOOO






        $update = $getTable
            ->update([
                'packages.name_pack' => $request->get('paket'),
                'transactions.date' => $request->get('tanggal'),
                'transactions.status' => $request->get('status'),
                'details.location' => $request->get('lokasi'),
                'details.price_transportation' => $request->get('biaya_transportasi'),
                'transactions.dp' => $request->get('biaya'),
                'transactions.pict'=> $request->get('bukti'),
                'transactions.description' => $request->get('deskripsi'),
                'transactions.total' => $total
            ]);

        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->select(
                'transactions.id',
                'users.name',
                'packages.name_pack',
                'transactions.date',
                'transactions.status',
                'details.location',
                'details.price_transportation',
                'transactions.dp',
                'transactions.pict',
                'transactions.description',
                'transactions.total'
            )
            ->where('transactions.id', $id);

        $delete->delete();
        return redirect()->route('order.index');
    }
}
