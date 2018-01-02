<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;
use App\Kategori;
use DataTables;
use PDF;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori = Kategori::all();
        return view('produk.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listData()
    {
        $produk = Produk::leftJoin('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')->orderBy('id_produk', 'asc')->get();

        $no = 0;

        $data = array();
        foreach($produk as $list)
        {
            $no ++;
            $row = array();
            $row[] = "<input type='checkbox' name='id[]' value=".$list->id_produk."'>";
            $row[] = $no;
            $row[] = $list->nama_produk;
            $row[] = $list->nama_kategori;
            $row[] = $list->merk;
            $row[] = $list->stok;
            $row[] = '<div class="btn-group">
               <a onclick="editForm('.$list->id_produk.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
               <a onclick="deleteData('.$list->id_produk.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';

            $data[] = $row;   
        }
        return DataTables::of($data)->escapeColumns([])->make(true);
    }

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
        //$jml = Produk::where('nama_produk', '=', $request['nama_produk'], 'and', 'merk', '=', $request['merk'])->count();
        //if ($jml > 1) {
            # code...
            $produk = new Produk;
            $produk->id_kategori = $request['kategori'];
            $produk->nama_produk = $request['nama_produk'];
            $produk->merk = $request['merk'];
            $produk->save();
            echo json_encode(array('msg'=>'success'));
        /*}
        else
        {
            echo json_encode(array('msg'=>'errors'));
        }*/
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
        $produk = Produk::find($id);
        echo json_encode($produk);
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
        $produk = Produk::find($id);
        $produk->id_kategori = $request['kategori'];
        $produk->nama_produk = $request['nama_produk'];
        $produk->merk = $request['merk'];
        $produk->save();
        echo json_encode(array('msg'=>'success'));
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
        $produk = Produk::find($id);
        $produk->delete();
    }

    //menghapus banyak data sekaligus
    public function deleteSelected(Request $request)
    {
        foreach($request['id'] as $id){
            $produk = Produk::find($id);
            $produk->delete();
        }
    }

    //membuat pdf

}
