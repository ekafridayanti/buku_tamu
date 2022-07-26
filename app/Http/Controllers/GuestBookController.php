<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuestBookController extends Controller
{
    public function index()
    {
        $guest = DB::table('guest_books')->paginate(25);
        $data = ['guest'=>$guest];
        return view('contents.GuestBookIndex', $data);
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
        
            return redirect()->route("guest.content");
    }

    public function delete($id)
    {
        DB::table('guest_books')->where('id', $id)->delete();

        return redirect()->route('guest.content')->with([
            'f_bg' => 'success',
            // 'f_title' => 'Hapus data sukses.',
            'f_msg' => 'Data tamu berhasil dihapus.',
        ]);
    }
    
    public function input()
    {
        return view('contents.GuestInputIndex');
    }
    public function add()
    {
        return view('contents.GuestAdd');
    }
}
