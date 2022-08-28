<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;
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
        $request->validate([
            'name' => "required",
            'institute' => "required",
            'needs' => "required",
            'notlp' => "required",
            'signature' => "required",
        ],[
            'signature.required'=>'Tanda tangan tidak boleh kosong!']);

        DB::table('guest_books')
            ->insert([
                'name'=> $request->name,
                'institute'=> $request->institute,
                'needs'=> $request->needs,
                'notlp'=> $request->notlp,
                'signature'=> $request->signature,
                'created'=> Carbon::now()
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
        $request->validate([
            'custom_start' => ['nullable', 'date', 'required_without:range', 'required_with:custom_end'],
            'custom_end' => ['nullable', 'date', 'required_without:range', 'required_with:custom_start', 'after_or_equal:custom_start'],
            'range' => ['nullable', 'numeric', 'required_without:custom_start,custom_end']
        ]);

        if (empty($request->range)) {
            $startDate = strtotime($request->custom_start);
            $startDate = date("Y-m-d H:i:s", $startDate);

            $endDate = strtotime($request->custom_end);
            $endDate = date("Y-m-d H:i:s", $endDate);

            $x =  DB::table('guest_books')
                    ->whereDate('created', '>=', $request->custom_start)
                    ->whereDate('created', '<=', $request->custom_end)
                    ->get();

            $dateStringStart = Carbon::parse($startDate)
                                        ->locale('id')
                                        ->settings(['formatFunction' => 'translatedFormat'])
                                        ->format('l, j F Y');

            $dateStringEnd = Carbon::parse($endDate)
                                        ->locale('id')
                                        ->settings(['formatFunction' => 'translatedFormat'])
                                        ->format('l, j F Y');

            $dateRange = "$dateStringStart - $dateStringEnd";
        } else {
            $startDate = now()->subDays($request->range)->endOfDay()->toDateTimeString();
            $endDate = now()->toDateTimeString();

            $x =  DB::table('guest_books')
                    ->whereDate('created', '>=', $startDate)
                    ->get();

            $dateStringStart = Carbon::parse($startDate)
                                        ->locale('id')
                                        ->settings(['formatFunction' => 'translatedFormat'])
                                        ->format('l, j F Y');

            $dateStringEnd = Carbon::parse($endDate)
                                        ->locale('id')
                                        ->settings(['formatFunction' => 'translatedFormat'])
                                        ->format('l, j F Y');

            $dateRange = "$dateStringStart - $dateStringEnd";
        }

        $data = [
            'data' => $x,
            'range' => $dateRange,
        ];

        $pdf = PDF::loadView('pdf.report', $data);
        return $pdf->stream('reports.pdf');
    }
}
