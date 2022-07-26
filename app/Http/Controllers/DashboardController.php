<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'guestTotal' => DB::table('guest_books')->count(),
            'guestTotalToday' => DB::table('guest_books')
                                    ->where('created', now()->toDateString())
                                    ->count(),
            'userTotal' => DB::table('users')->count(),
        ];

        return view('contents.Dashboard', $data);
    }
}
