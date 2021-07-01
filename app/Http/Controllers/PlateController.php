<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;

class PlateController extends Controller
{
    public function index($user_id)
    {
        $plates = Plate::where('user_id', $user_id)->where('visibilita', 1) ->get();

        $data = [
            'plates' => $plates
        ];

        return view ('guest.plates.index', $data);
    }

    public function show($id)
    {
        $plates = Plate::where('id', $id)->first();
        if (!$plates) {
            abort(404);
        }

        $data = [
            'plates' => $plates
        ];

        return view('guest.plates.show', $data);
    }
}
