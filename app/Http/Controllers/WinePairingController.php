<?php

namespace App\Http\Controllers;

use App\Models\WinePairing;
use Illuminate\Http\Request;

class WinePairingController extends Controller
{

    public function showAllWinePairings()
    {
        return response()->json(WinePairing::all());
    }

    public function showOneWinePairing($id)
    {
        return response()->json(WinePairing::find($id));
    }

}
