<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function mtk_game(){
        return view('game.mtk_game');
    }

    public function index(){
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->get(),
            'videos' => Video::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }

    public function berita(){
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail ($slug){
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikels' => Blog::orderBy('id', 'desc')->get(),
            'artikel' => $artikel
        ]);
    }
}
