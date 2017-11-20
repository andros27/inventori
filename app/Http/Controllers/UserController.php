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

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'jabatan' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'no_telp' => 'required|max:12',
        ]);
    }

    public function store(Request $request)
    {
        //
        $add = new User;
        $add->name = $request['name'];
        $add->username = $request['username'];
        $add->no_telp = $request['no_telp'];
        $add->email = $request['email'];
        $add->jabatan = $request['jabatan'];
        $add->password = bcrypt($request['password']);
        $add->save();

        return Redirect::route('profile.index');
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

    public function showPassword($id)
    {
        $pass = User::find($id);
        return view('pegawai.changePassword', compact('pass'));

    }

    public function changePassword(Request $request, $id)
    {
        //dd($request->all());
        $profile = User::find($id);
        $current_password = Auth::user()->password;

        if(Hash::check($request['current_password'], $current_password))//untuk memecah password yang di lock
        {
            $profile->password = Hash::make($request['password']); // untuk membuat lock password
            $profile->update();
            return redirect()->back()->with('alert', 'Proses Ubah Sukses!');                
        }

//        return redirect()->back()->with('alert', 'Proses Ubah Sukses!');
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

        $this->validate($request, $this->aturan);

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
