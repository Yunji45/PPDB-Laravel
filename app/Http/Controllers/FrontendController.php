<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class FrontendController extends Controller
{
    public function index ()
    {
        return view ('frontend/app');
    }

    public function email(Request $request)
    {
        $data = $request->all();
        dispatch(new SendMailJob($data));
        return redirect()->route('awal')->with('status', 'Email berhasil dikirim');
    }
}
