<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Bilet;

class BiletController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $userIdEve = Auth::id();
            $eveniment = DB::select('SELECT id FROM evenimente WHERE id = 1');
            $dataGenerare = now();

            $ticket = new Bilet();
            $ticket->id_user = $userIdEve;
            $ticket->id_eveniment = $eveniment[0]->id;
            $ticket->data_inregistrare = $dataGenerare;
            $ticket->lista_de_intrari = '';
            $ticket->save();




            return view('eveniment2', [
                'curentUser' => $userIdEve,
                'evenimente' => $eveniment,
                'dataGenerare' => $dataGenerare
            ]);
        } else {
            // return view for 404
        }
    }
}
