<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Tag;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

        /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $tags=Tag::all();
        return view('auth.register', compact('tags'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome_attivita' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'indirizzo' => ['required', 'string', 'max: 255'],
            'p_iva' => ['required', 'string', 'min: 11', 'max: 11'],
            'numero_telefono' => ['required', 'string', 'min: 10', 'max: 10'],
            //img_banner e img_logo da inserire
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $created_user = User::create([
            'nome_attivita' => $data['nome_attivita'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'indirizzo' => $data['indirizzo'],
            'p_iva' => $data['p_iva'],
            'numero_telefono' => $data['numero_telefono'],
        ]);

        if(array_key_exists('tags', $data)) {
            $created_user->tags()->sync( $data['tags'] );
        }    

        return $created_user;
    }
}
