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

    protected $pesan = array (
        //'current_password.min:8' => 'Minimal Password Memiliki 8 digit',
        'name.required' => 'Field ini harus anda isi',
        'username.required' => 'Field ini harus anda isi',
        //'password.min:8' => 'Minimal Password Memiliki 8 digit',
        //'password.same' => 'Password dengan Konfirmasi harus sama',
    );

    protected $aturan = array(
        'name' => 'required',
        'username' => 'required',
        'email' => 'required|email',
        //'password' => 'min:8',
        //'confirm_password' => 'same:password',
        'noTelp' => 'max:12',
        
    );

    public function index()
    {
        //
        $halaman =10;
        $pegawai = User::orderBy('name', 'asc')->paginate($halaman);
        $no = $halaman * ($pegawai->currentPage() - 1);
        return view('pegawai.pegawai_list', compact('pegawai', 'no'));
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
        $profile = User::find($id);
        return view('profile', compact('profile')); 
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

        $this->validate($request, $this->aturan, $this->pesan);

        $profile = User::find($id);

        /*membuat password
            bagian membuat password*/
        $current_password = $profile->password;

        if(Hash::check($request['current_password'], $current_password))//untuk memecah password yang di lock
        {
            $profile->password = Hash::make($request['password']); // untuk membuat lock password
        }
        

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
        $profile->no_telp = $request['noTelp'];
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
        //
    }
}
