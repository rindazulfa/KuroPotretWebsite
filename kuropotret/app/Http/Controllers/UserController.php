<?php

namespace App\Http\Controllers;

use App\User;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
            ->select(
                'users.id',
                'users.username',
                'users.name',
                'users.KTP',
                'users.no_phone',
                'users.location',
                'users.email'
            )
            ->get();
        $data['users'] = $user;
        return view("admin.user.index", $data);
    }
    public function export_excel()
	{
		return Excel::download(new UserExport, 'users.xlsx');
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
        $detail = DB::table('users')
            ->select(
                'users.id',
                'users.username',
                'users.name',
                'users.KTP',
                'users.no_phone',
                'users.location',
                'users.email'
            )
            ->where('users.id', $id)
            ->first();
        return view("admin.user.detail", ['detail' => $detail]);
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
        $delete = DB::table('users')
            ->select(
                'users.id',
                'users.username',
                'users.name',
                'users.KTP',
                'users.no_phone',
                'users.location',
                'users.email'
            )
            ->where('users.id', $id);
        $delete->delete();
        return redirect()->route('user.index');
    }
}
