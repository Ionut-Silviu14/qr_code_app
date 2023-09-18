<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Bilet;
use App\Models\User;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\Image\Png;

class BiletController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $userIdEve = Auth::id();
            $eveniment = DB::select('SELECT id FROM evenimente WHERE id = 1');
            $dataGenerare = now();
    
            $existingTicket = Bilet::where('id_user', $userIdEve)
                ->where('id_eveniment', $eveniment[0]->id)
                ->first();
    
            if ($existingTicket) {
                return "Ai deja un bilet pentru acest eveniment."; 
            } else {
                $ticket = new Bilet();
                $ticket->id_user = $userIdEve;
                $ticket->id_eveniment = $eveniment[0]->id;
                $ticket->data_generare = $dataGenerare;
                $ticket->lista_de_intrari = '';
                $ticket->save();
    
                $biletId = $ticket->id;
    
                $user = User::find($userIdEve);
                $user->idbilet = str($biletId);
                $user->save();
    
                return view('eveniment2', [
                    'curentUser' => $userIdEve,
                    'evenimente' => $eveniment,
                    'dataGenerare' => $dataGenerare
                ]);
            }
        } else {
            // return view for 404
        }
    }
}
