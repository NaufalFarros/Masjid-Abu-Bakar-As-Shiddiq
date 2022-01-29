<?php

namespace App\Http\Controllers\Admin\Event_Admin;


use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\event;
use App\Models\photo_event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class EventadminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = event::all();
        return view('admin.Eventt.Listevent',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Eventt.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'judul' => 'required|string|max:200',
            'tanggal' => 'required',
            'deskripsi' => 'required|string|max:300',
        ]);

        $event = event::create([
            'judul' => $request->judul,
            'tanggal' => $request -> tanggal = Carbon::createFromFormat('d/m/Y', $request->tanggal)->format('Y/m/d'),
            'deskripsi' => $request->deskripsi,
        ]);
        $event->save();
        $id_event = $event->id;



        // $photo = $request->file('images')->extension();
       
        // dd($request->image);
        // if ($request->hasfile('images')) {
        //     $images = $request->file('images');
        //     dd($images);
        //     // dd($photo);
        //     foreach( $images as $image) {
        //         $length = 25;
        //         $name = Str::random($length);
        //         $newFileName = auth()->user()->id . '-' . $name . '.' . $image;
        //         $this->validate($request, ['image' => 'required|file|max:5000']);
        //         $path = Storage::putFileAs('public/photo-event/', $request->file('image'), $newFileName);            //pindah foto ke folder profile-photo di storage
        //         // Storage::putFileAs('profile-photo/', $request->image ,$newFileName);
               

        //         //simpan nama ke database

        //         $save = photo_event::create([
        //             'photo_event_path' => 'photo-event/' . $newFileName,
        //             'event_id' => $id_event,
        //         ]);
        //         $save->save();
        //     }
        // }
       
       
       
       
        $request->validate([
            'images' => 'required|max:5000',
          ]);
  
        //   dd($request->File('images'));
          if ($request->hasfile('images')) {
              $images = $request->file('images');
              foreach($images as $image) {
                  $length = 20; 
                  $name = auth()->user()->id . '-' . str::random($length) .'.'. $image->extension();
                  $path = $image->storeAs('photo-event', $name, 'public');
  
                  photo_event::create([
                      'photo_event_path' => $path,
                      'event_id' => $id_event,
                    ]);
              }
           }



        Alert::success('Tambah Data', 'Data Berhasil Di Tambah');
        return redirect('/admin/event');
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
        // dd($id);
        $data = event::findorfail($id);
        $photo = $data->photo()->get('photo_event_path') ;
        // dd($photo);
       

        foreach($photo as $p){
            // dd($p);
        //    $remove = str::remove('"','}', $p);
            Storage::disk('local')->delete('public/photo-event/'. basename($p['photo_event_path']));
            // dd($p);
        }
        
        $data->delete();
        Alert::success('Menghapus data', 'Data Berhasil Di Hapus');
        return redirect('/admin/event');
    }
}
