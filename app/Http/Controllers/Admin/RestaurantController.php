<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Plate;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plate = Plate::where('user_id', Auth::id())->get();
        $user = User::where('id', Auth::id())->get();

        $data = [
            'plates' => $plate,
            'user' => $user,
            'id' => Auth::id()
        ];

        return view('admin.restaurant.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        /* $user = User::find(Auth::) */
        $data = [
            'user' => $user,
            'tags' => Tag::all()
        ];

        return view('admin.restaurant.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nome_attivita' => ['required', 'string', 'max:255'],
            'indirizzo' => ['required', 'string', 'max: 255'],
            'p_iva' => ['required', 'string', 'min: 11', 'max: 11'],
            'numero_telefono' => ['required', 'string', 'min: 10', 'max: 10'],
        ]);

        $user = User::find(Auth::user()->id);

        $banner = '';
        $logo = "";

        /* if( $request->hasFile( 'img_banner' ) ) {
            $destinationPath = storage_path( 'app/public/banners' );
            $file = $request->img_banner;
            $fileName = time() . '.'. $file->clientExtension();
            $file->move( $destinationPath, $fileName );
            $banner = 'app/public/banners/' . $fileName;
        } */

        /* if( $request->hasFile( 'img_logo' ) ) {
            $destinationPath = storage_path( 'app/public/logos' );
            $file = $request->img_logo;
            $fileName = time() . '.'. $file->clientExtension();
            $file->move( $destinationPath, $fileName );
            $logo = 'app/public/logos/' . $fileName;
        } */

        $data = $request->all();

        /* $data['img_banner'] = $banner; */
        if( $request->hasFile( 'img_banner' ) ) {
            $image_path = Storage::put('banners', $data['img_banner']);
            $data['img_banner'] = $image_path;
        }

        /* $data['img_logo'] = $logo; */
        if( $request->hasFile( 'img_logo' ) ) {
            $image_path = Storage::put('logos', $data['img_logo']);
            $data['img_logo'] = $image_path;
        }

        $user->update($data);

        if (array_key_exists('tags', $data)) {
            $user->tags()->sync($data['tags']);
        } else {
            $user->tags()->sync([]);
        }
        
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->tags()->sync([]);
        $user->delete();

        return redirect()->route('guest.home');
    }
}
