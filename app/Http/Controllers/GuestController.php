<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
        // $guest = DB::table('guest_books');
        // $data = ['guest'=>$guest];
        return view('contents.guest.GuestInput');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => "required",
            'institute' => "required",
            'notlp' => "required",
            'sector'=>"required",
            'signature' => "required",
        ],[
            'signature.required'=>'Tanda tangan tidak boleh kosong',
            
            ]);
        $needs=$request->needs1;
        if ($needs=='another') {
            $needs=$request->needs2;
            if (empty($needs)) {
                return redirect()->back()->withErrors(['massage'=>'Masukkan Keperluan Anda pada Area Kolom!'])->withInput($request->input()) ;

            }
        } 
        
        if (!empty($request->needs1)&& !empty($request->needs2)&& ($request->needs1!='another')) {
            $needs = $request->needs1." ".$request->needs2;
        }
        

        DB::table('guest_books')
            ->insert([
                'name'=> $request->name,
                'institute'=> $request->institute,
                'sector'=> $request->sector,
                'needs'=> $needs,
                'notlp'=> $request->notlp,
                'signature'=> $request->signature,
                'created'=> Carbon::now()
            ]);
            return redirect()->route('success')->with([
                'name'=>$request->name
            ]);

    }
}
