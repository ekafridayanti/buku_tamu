<?php

namespace App\Http\Controllers;

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
        
        DB::table('guest_books')
            ->insert([
                'name'=> $request->name,
                'institute'=> $request->institute,
                'needs'=> $request->needs,
                'notlp'=> $request->notlp,
                'signature'=> $request->signature,
                'created'=> date("Y-m-d H:i:s", strtotime($request->date))
            ]);
            return redirect()->route('success')->with([
                'name'=>$request->name
            ]);
            
    }
}
