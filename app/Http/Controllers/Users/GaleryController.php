<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\photoGalery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    
    public function index(){
        $photo = photoGalery::all();
        return view('User.Galery.galery',compact('photo'));
    }
}
