<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function about(){
        return view('about.about');
    }

    public function more(){
        return view('videos/video', [
            'more' => Video::orderBy('id', 'desc')->paginate(30),
        ]);
    }

    public function index(){
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(5)->get(),
            'videos' => Video::orderBy('id', 'desc')->get()->random(3),
            'carausel' => Blog::orderBy('id', 'desc')->get()->random(1),
            'carausel2' => Blog::orderBy('id', 'desc')->get()->random(1),
            'carausel3' => Blog::orderBy('id', 'desc')->get()->random(1),
        ]);
    }

    public function berita(){
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->paginate(20),
            'side' => Blog::orderBy('id', 'desc')->limit(5)->get(),
            'carausel' => Blog::orderBy('id', 'desc')->get()->random(1),
            'carausel2' => Blog::orderBy('id', 'desc')->get()->random(1),
            'carausel3' => Blog::orderBy('id', 'desc')->get()->random(1),
        ]);
    }

    public function detail ($slug){
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikels' => Blog::orderBy('id', 'desc')->get()->random(4),
            'artikel' => $artikel
        ]);
    }
}
