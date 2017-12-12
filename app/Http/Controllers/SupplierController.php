<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('supplier.index');
    }

    //mengambil data ajax
    public function listData()
    {
        $supplier = Supplier::orderBy('nama_supplier', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($supplier as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_supplier;
            $row[] = $list->no_telp;
            $row[] = $list->alamat_kantor;
            $row[] = $list->kota;
            $row[] = '<div class="btn-group">
               <a onclick="showForm('.$list->id_supplier.')" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a> 
               <a onclick="editForm('.$list->id_supplier.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
               
               <a onclick="deleteData('.$list->id_supplier.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';

            $data[] = $row;   
        }
        $output = array("data"=> $data);
        return response()->json($output);
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
        $tambah = new Supplier;
        $tambah->nama_supplier= $request['nama'];
        $tambah->alamat_kantor= $request['alamat_kantor'];
        $tambah->no_telp= $request['noTelp'];
        $tambah->email= $request['email'];
        $tambah->provinsi= $request['provinsi'];
        $tambah->kota= $request['kota'];
        $tambah->save();
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
        $supplier = Supplier::find($id);
        echo json_encode($supplier);
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
        $ubah = Supplier::find($id);
        $ubah->nama_supplier= $request['nama'];
        $ubah->alamat_kantor= $request['alamat_kantor'];
        $ubah->no_telp= $request['noTelp'];
        $ubah->email= $request['email'];
        $ubah->provinsi= $request['provinsi'];
        $ubah->kota= $request['kota'];
        $ubah->update();
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
        $supplier = Supplier::find($id);
        $supplier->delete();
    }
}