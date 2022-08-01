<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
        return view('contents.GuestInputIndex');
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
                'created'=> now()
            ]);
            return redirect()->route('success')->with([
                'name'=>$request->name
            ]);
            
    }
}
