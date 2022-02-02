<?php

namespace App\Http\Controllers\EventUser;

use App\Http\Controllers\Controller;
use App\Models\event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){

        $data = event::where('tanggal','>' ,Carbon::now())->paginate(1);
        $event = event::paginate(10);
        return view('User.About Us.event',compact('data','event'));
    }


    public function Show($id){
        // dd($id);
        $data = event::where('id',$id)->get();
        // dd($data);
        return view('User.About Us.event',compact('data'));
    }








}
