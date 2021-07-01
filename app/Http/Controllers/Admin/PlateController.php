<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Plate;
use App\Tag;
use App\Dish;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'dishes' => Dish::all()
        ];

        return view('admin.plates.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome_piatto' => ['required', 'string', 'max:255'],
            'prezzo' => ['required', 'numeric'],
            'ingredienti' => ['required', 'string'],
        ]);

        $data = $request->all();
        $new_plate = new Plate();
        $new_plate->fill($data);


        /* $slug = Str::slug($new_plate->nome_piatto, '-');

        $slug_base = $slug;

        $plate_presente = Plate::where('slug', $slug)->first(); */


        /* $contatore2 = 1; */

        /* while ($plate_presente) {
            $slug = $slug_base . '-' . $contatore2;
            $contatore2++;
            $plate_presente = Plate::where('slug', $slug)->first();
        }

        $new_plate->slug = $slug; */
        $new_plate->user_id = Auth::id();
        $new_plate->save();

        return redirect()->route('admin.restaurant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id) {
            $plate = Plate::find($id);

            $data = [
                'plate' => $plate
            ];

            return view('admin.plates.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plate = Plate::find($id);
        
        $data = [
            'plate' => $plate,
            'dishes' => Dish::all()
        ];
        
        return view('admin.plates.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        $this->validate($request, [
            'nome_piatto' => ['required', 'string', 'max:255'],
            'prezzo' => ['required', 'numeric'],
            'ingredienti' => ['required', 'string'],
        ]);

        $data = $request->all();
        $new_plate = new Plate();
        $new_plate->fill($data);


        /* $slug = Str::slug($new_plate->nome_piatto, '-');

        $slug_base = $slug;

        $plate_presente = Plate::where('slug', $slug)->first();


        $contatore2 = 1;

        while ($plate_presente) {
            $slug = $slug_base . '-' . $contatore2;
            $contatore2++;
            $plate_presente = Plate::where('slug', $slug)->first();
        }

        $new_plate->slug = $slug; */
        $plate->update($data);

        return redirect()->route('admin.restaurant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();

        return redirect()->route('admin.restaurant.index');
    }
}
