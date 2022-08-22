<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class GuestBookController extends Controller
{
    public function index()
    {
        $guest = DB::table('guest_books')->paginate(25);
        $data = ['guest'=>$guest];
        return view('contents.admin.GuestBookIndex', $data);
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
        return view('contents.admin.GuestInputIndex');
    }

    public function add()
    {
        return view('contents.admin.GuestAdd');
    }

    public function print()
    {
        return view ('contents.admin.GuestReport');
    }

    public function doPrint(Request $request) {
        $dateRange =  $request->date_range;

        if ($dateRange === null) {
            return redirect()->back();
        }

        $range = explode(" - ", $dateRange);

        $startDate = strtotime($range[0]);
        $startDate = date("Y-m-d H:i:s", $startDate);

        $endDate = strtotime($range[1]);
        $endDate = date("Y-m-d H:i:s", $endDate);

        $x =  DB::table('guest_books')
                    ->whereDate('created', '>=', $startDate)
                    ->whereDate('created', '<=', $endDate)
                    ->get();

        $data = [
            'data' => $x,
            'range' => $dateRange,
        ];

        $pdf = PDF::loadView('pdf.report', $data);
        return $pdf->stream('reports.pdf');
    }
}
