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
            'needs' => "required",
            'notlp' => "required",
            'signature' => "required",
        ]);


        DB::table('guest_books')
            ->insert([
                'name'=> $request->name,
                'institute'=> $request->institute,
                'needs'=> $request->needs,
                'notlp'=> $request->notlp,
                'signature'=> $request->signature,
                'created'=> Carbon::now()
            ]);
            return redirect()->route('success')->with([
                'name'=>$request->name
            ]);

    }
}
