<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
}
