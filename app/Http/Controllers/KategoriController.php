<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Yajra\Datatables\Facades\Datatables;
use Redirect;

class KategoriController extends Controller
{

    /*protected $pesan = array (
        'naprofile.changePassma_kategori.required' => 'Isi Nama Kategori',
    );

    protected $aturan = array(
        'nama_kategori' => 'required',
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$batas = 10;
        //$kategori = Kategori::orderBy('nama_kategori', 'asc')->paginate($batas);
        //$no = $batas * ($kategori->currentPage() - 1);
        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listData()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($kategori as $list)
        {
            $no ++;
            $row = array();
            $row[] = "<input type='checkbox' name='id[]' value=".$list->id_kategori."'>";
            $row[] = $no;
            $row[] = $list->nama_kategori;
            $row[] = '<div class="btn-group">
               <a onclick="editForm('.$list->id_kategori.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
               <a onclick="deleteData('.$list->id_kategori.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';

            $data[] = $row;   
        }
        $output = array("data"=> $data);
        return response()->json($output);
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*public function create()
    {
        $kategori = Kategori::all();
        return view('kategori.form_tambah_kategori');
    }*/

    public function store(Request $request)
    {
        //
       // $this->validate($request, $this->aturan, $this->pesan);

        $tambah = new Kategori;
        $tambah->nama_kategori = $request['nama_kategori'];
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
        $kategori = Kategori::find($id);
        echo json_encode($kategori);
        //return view('kategori.form_ubah_kategori', compact('kategori'));

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
        //$this->validate($request, $this->aturan, $this->pesan);

        $ubah = Kategori::find($id);
        $ubah->nama_kategori = $request['nama_kategori'];
        $ubah->update();
        //return Redirect::route('kategori.index');
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
        $kategori = Kategori::find($id);
        $kategori->delete();

        //return Redirect::route('kategori.index');

    }

    public function deleteSelected(Request $request)
    {
        foreach($request['id'] as $id){
            $kota = Kategori::find($id);
            $kota->delete();
        }
    }
}
