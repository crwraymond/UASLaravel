<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $type=Articles::all();
        return view('home', ['type'=>$type]);
    }
    
    public function detail($id)
    {
        $detail=DB::table('articles')->where('id', $id)->first();
        return view('detail', ['detail'=>$detail]);
    }
    
    public function aboutus()
    {
        return view('aboutus');
    }

}
