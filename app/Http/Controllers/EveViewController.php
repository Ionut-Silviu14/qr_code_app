<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EveViewController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $evenimenteUPB = DB::select('SELECT * FROM evenimente WHERE id = 1');
            return view('eveniment3', [
                'curentUser' => $userId,
                'evenimente' => $evenimenteUPB
            ]);
        } else {
            // return view for 404
        }
    }
}
