<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listuser()
    {
        $type=DB::table('users')->where('role', 'User')->get();
        return view('adminuser', ['type'=>$type]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $detail = DB::table('articles')->where('user_id', $id)->get();
        foreach($detail as $d)
        {
            $imgpath = '../storage/app/'.$d->image;
            unlink($imgpath);
        }
        $details = DB::table('articles')->where('user_id', $id);
        $details->delete();
        $user->delete();
        return redirect()->route('deleteuser');
    }
}