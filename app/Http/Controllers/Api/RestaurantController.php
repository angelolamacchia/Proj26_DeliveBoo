<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Tag;
use App\Plate;

class RestaurantController extends Controller
{
    public function index(Request $request) 
    {
        $data = $request->all();
        // @dd($request);
        if(empty($data['tags'])) {

            $restaurants = User::with('tags')
            ->orderBy('nome_attivita', 'asc')
            ->get();
        }
        elseif (!empty($data['tags'])) 
        {
            $restaurants = [];
            $tagsId = [];

            $tagsId = $data['tags'];
            foreach ($tagsId as $tag) {
                $restaurants = User::whereHas('tags', function($q) use ($tagsId) 
                {
                    $q->whereIn('cucina', $tagsId);
                }, '=', count($tagsId))->with('tags')->get();
            }
        }
        return response()->json($restaurants);
    }

    public function food() {
        $plates = Plate::all();
        return response()->json($plates);
    }

    public function tag() {
        $tags = Tag::all();
        return response()->json($tags);
    }
}
