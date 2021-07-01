<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Plate;
use App\Tag;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants=User::with('tags')->get();
    
        $data = [
            'restaurants' => $restaurants,
            'tags' => Tag::all()
        ];

        return view('guest.restaurants.index', $data);
    }

    public function show($id)
    {
        $plates = Plate::where('user_id', $id)->get();
        $user = User::where('id', $id)->get();

        $data = [
            'plates' => $plates,
            'user' => $user,
            'id' => $id
        ];

        return view('guest.restaurants.show', $data);
    }

    public function payed()
    {
        return view('guest.order.paid');
    }

    
}
