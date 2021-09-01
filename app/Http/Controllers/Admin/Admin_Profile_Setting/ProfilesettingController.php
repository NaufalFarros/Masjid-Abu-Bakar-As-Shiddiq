<?php

namespace App\Http\Controllers\Admin\Admin_Profile_Setting;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilesettingController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.Admin_Profile_Setting.profile_setting');
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
        // dd($request);
        if( $request->name != '' && $request->username != '' ){
            $request->validate([
                'name' => 'required|string|min:3|max:100',
                'username' => 'required|string|min:6|max:100|unique:users,username,' . $id,
            ], [
                'nama.required' => 'Nama Harus Di Isi',
                'nama.min' => 'Nama Minimal 3 Huruf',
                'nama.max' => 'Nama Maksimal 100 Huruf',
                'username.required' => 'Username Harus Di isi',
                'username.min' => 'Username Harus Minimal 6',
                'username.unique' => 'Username Sudah Ada Silahkan Membuat Username Lain',
            ]);
            User::find($id)->update($request->all());
            Alert::success('Edit Profil', 'Data Profil Berhasil Dirubah');
            return redirect('/admin/profile-setting')->with('edit', 'Data Berhasil di Edit');
        }
         if( $request->password != '') 
        {
            $request->validate([      
                 'password'=> ['required','min:6','confirmed', Rules\Password::defaults()],
            ],[
                'password.required' => 'Password Harus Di Isi',
                'password.min' => 'Password Minimal 6 Huruf',
                'password.confirmed' => 'Password Konfirmasi Tidak Cocok ',
            ]);

            User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);
            Alert::success('Ubah Password', 'Ubah Password Berhasil');
            return redirect('/admin/profile-setting')->with('edit', 'Data Berhasil di Edit');

        }

        if($request->image != '')
        {
            dd($request->hasFile('image'));
            $photo = file($request->image) ;
            $newFileName = auth()->user()->id . '-' .$photo ;
            //pindah foto ke folder profile-photo di storage
            // Storage::putFileAs('profile-photo', $request->image ,$newFileName);
           
            //simpan nama ke database
            auth()->user()->update([
                'profile_photo_path' => 'profile-photo' .$newFileName,
            ]);
            Alert::success('Ubah Password', 'Ubah Foto Berhasil');
            return redirect('/admin/profile-setting');
        }
       
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
