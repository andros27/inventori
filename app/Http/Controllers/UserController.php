<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $aturan = array(
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'password' => 'min:8',
        'confirmed' => 'same:password',
        'noTelp' => 'max:12',
    );

    public function index()
    {
        //
        return view('pegawai.pegawai_list');
    }

    public function listData()
    {
        $user = User::orderBy('name', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($user as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->name;
            $row[] = $list->no_telp;
            $row[] = $list->email;
            $row[] = '<div class="btn-group">
                <a onclick="editForm('.$list->id.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a onclick="deleteData('.$list->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </div>';

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

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'jabatan' => 'required',
            'password' => 'required|string|min:6',
            'confirmed' => 'same:password',
            'no_telp' => 'required|max:12',
        ]);
    }

    public function store(Request $request)
    {
        //untuk menyimpan data
        $jml = User::where('email', '=', $request['email'])->count();
        if($jml < 1)
        {
            $add = new User;
            $add->name = $request['name'];
            $add->username = $request['username'];
            $add->no_telp = $request['no_telp'];
            $add->email = $request['email'];
            $add->jabatan = $request['jabatan'];
            $add->password = bcrypt($request['password']);
            $add->save();
            echo json_encode(array('msg'=>'success'));
        }
        else
        {
            echo json_encode(array(['msg'=>'errors']));   
        }
        
        //return Redirect::route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //untuk melihat data pegawai
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //untuk melihat data untuk di-edit

        $profile = User::find($id);
        echo json_encode($profile);
        //return view('profile', compact('profile'));
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

        //$this->validate($request, $this->aturan);

        $profile = User::find($id);

        //handle the user upload
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/avatar');
            $avatar->move($destinationPath, $filename);

            $profile->avatar = $filename;
        }
        //bagian update data name, username,dan email
        $profile->name = $request['name'];
        $profile->username = $request['username'];
        $profile->email = $request['email'];
        $profile->no_telp = $request['no_telp'];
        $profile->jabatan = $request['jabatan'];
        $profile->update();
        return redirect()->back()->with('alert', 'Proses Ubah Sukses!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //bagian hapus pegawai
        $profile=User::find($id);
        $profile->delete();

        //return Redirect::route('profile.index');
    }
}
