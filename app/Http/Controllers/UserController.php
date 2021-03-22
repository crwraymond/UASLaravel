<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'min:5', 'filled'],
            'email' => ['required', 'filled','string', 'email', 'max:255', 'unique:users'],
            'phone'=>['filled']
        ]);
        DB::table('users')->where('id', $id)->update([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone  
        ]);
        return redirect()->route('profile');
    }

    public function blog()
    {
        $type=DB::table('articles')->where('user_id', Auth::user()->id)->get();
        return view('blog', ['type'=>$type]);
    }

    public function blogpage()
    {
        $type=Categories::all();
        return view('blogpage', ['type'=>$type]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Title'=>'min:5|filled',
            'story'=>'min:10|filled',
            'category'=>'filled',
        ]);
        $categoryid=DB::table('categories')->select('id')->where('name', request('category'))->first()->id;
        $a=new Articles;
        $a->title=request('Title');
        $a->description=request('story');
        $a->category_id=$categoryid;
        $a->user_id=Auth::user()->id;
        $a->image=request()->file('image')->store('public');
        $a->save();
        return redirect()->route('blog');
    }
    public function deleteblog($id)
    {
        $delete=DB::table('articles')->where('id', $id)->get();
        $d=Articles::find($id);
        unlink('../storage/app/'.$d->image);
        $d->delete();
        if(Auth::user()->role=='User')
        {
            return redirect()->route('blog');
        }
        else
        {
            return redirect()->route('home');
        }
    }

}
