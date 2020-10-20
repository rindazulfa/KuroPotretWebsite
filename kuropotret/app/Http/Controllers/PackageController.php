<?php

namespace App\Http\Controllers;

use App\package;

use App\Exports\PackageExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
class PackageController extends Controller
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
        return view("admin.package.index", $data);
    }
    public function export_excel()
	{
		return Excel::download(new PackageExport, 'package.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = DB::table('packages')
            ->insert([
                'name_pack' => $request->get('nama'),
                'price' => $request->get('harga'),
                'qty_photos' => $request->get('jml_foto'),
                'qty_edit' => $request->get('jml_edit'),
                'duration' => $request->get('durasi'),
                'working_hours' => $request->get('penyewaan')
            ]);
            return redirect('/package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = package::find($id);
        return view('admin.package.detail_package', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = package::find($id);
        return view('admin.package.edit', ['edit' => $edit]);
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
        $edit = DB::table('packages')
            ->where('id', $id)
            ->update([
                'name_pack' => $request->get('nama'),
                'price' => $request->get('harga'),
                'qty_photos' => $request->get('jml_foto'),
                'qty_edit' => $request->get('jml_edit'),
                'duration' => $request->get('durasi'),
                'working_hours' => $request->get('penyewaan')
            ]);


        return redirect('/package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = package::findOrFail($id);
        $delete->delete();
        return redirect()->route('package.index');
    }
}
