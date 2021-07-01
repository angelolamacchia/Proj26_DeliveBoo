<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Plate;
use App\Tag;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $tags = User::find(Auth::user()->id)->tags()->get();
        
        // foreach ($user->tags as $tag) {
            // echo $role->pivot->created_at;
            // @dd($tag);
            // $tag->tag_user->cucina;
            // $user->tags->cucina;
        // }

        $data = [
            'user' => $user,
            'tags' => $tags
        ];

        // @dd($data);

        return view('admin.home', $data);
    }
}
