<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function detail($id)
    {
        $detail=DB::table('articles')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('categories.id', $id)
            ->get();
        return view('category', ['detail'=>$detail]);
    }
}
