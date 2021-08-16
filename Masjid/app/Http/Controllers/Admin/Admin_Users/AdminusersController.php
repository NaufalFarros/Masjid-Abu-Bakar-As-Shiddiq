<?php

namespace App\Http\Controllers\Admin\Admin_Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Admin_Users.list_admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Admin_Users.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:3|max:100',
            'email' => ' required|email|string|max:100|unique:users',
            'password'=> ['required','min:6', 'confirmed', Rules\Password::defaults()],
            'role'=> 'in:admin,ketua,wakil,bendahara,sekretaris',
        ],[
            'nama.required'=> 'Nama Harus Di Isi',
            'nama.min' => 'Nama Minimal 3 Huruf',
            'nama.max'=> 'Nama Maksimal 100 Huruf',
            'email.required'=>'Email Harus Di Isi',
            'email.email'=>'Masukkan Email Dengan Benar @... ',
            'email.unique'=>'Email Sudah Digunakan',
            'password.required'=>'Password Harus Di Isi',
            'password.min'=>'Password Minimal 6 Huruf',
            'password.confirmed'=>'Password Konfirmasi Tidak Cocok ',
            'role.in' => 'Role Harus Di  '
        ]);

        // $role = [
        //     'role' => ['admin', 'ketua','wakil','bendahara','sekretaris'],
        // ];
        // Validator::make($role, [
        //     'role' => [
        //         'required',
        //         'array',
        //         Rule::in(['admin', 'ketua','wakil','bendahara','sekretaris']),
        //     ],
        // ]);
        $user = User::create([
            'name' => $request->nama,
            'email'=> $request->email,
            'password'=>Hash::make($request->password),
            'role'=> $request->role,
        ]);
        $user->save();

        return redirect('/Admin-Users')->with('succces','Data Berhasil Ditambah');

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
        return view('admin.Admin_Users.edit_admin');
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
        //
    }
}
