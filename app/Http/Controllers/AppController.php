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

    public function index() {
        $blogs = Blog::orderBy('id', 'desc')->get();
        $articles = $blogs->take(5);
    
        // Ensure at least an empty collection is returned if there are not enough blogs
        $carausel = ($blogs->count() > 0) ? collect([$blogs->random()]) : collect();
        $carausel2 = ($blogs->count() > 0) ? collect([$blogs->random()]) : collect();
        $carausel3 = ($blogs->count() > 0) ? collect([$blogs->random()]) : collect();
    
        $videos = Video::orderBy('id', 'desc')->get();
        $randomVideos = ($videos->count() >= 3) ? $videos->random(3) : collect();
    
        return view('welcome', [
            'artikels' => $articles,
            'videos' => $randomVideos,
            'carausel' => $carausel,
            'carausel2' => $carausel2,
            'carausel3' => $carausel3,
        ]);
    }

    public function berita(){
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->paginate(5),
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
