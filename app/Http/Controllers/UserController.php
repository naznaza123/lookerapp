<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Datadiri;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        $datadiri=Datadiri::all();
        $data=User::all();
        $post=Post::where('post_status','=','active')->get();
        return view ('user.index',compact('post','datadiri'));
    }
    public function landing_page(){
        $datadiri=Datadiri::all();
        $post=Post::where('post_status','=','active')->get();
        return view ('user.landing_page',compact('post','datadiri'));
    }
    public function detail_post($id){
        $datadiri=Datadiri::all();
        $post=Post::find($id);
        
        return view ('user.detail_post',compact('post','datadiri'));
    }
    public function data_diri(){
        $datadiri = Datadiri::all();
        return view ('user.data_diri',compact('datadiri'));
    }
    public function data_diri_add(){
        $datadiri = Datadiri::all();

        return view ('user.data_diri_add');
    }
    public function data_diri_create(Request $request){
        $user=Auth()->user();
        $datadiri= new Datadiri;

        $datadiri->nama=$request->nama;
        $datadiri->alamat=$request->alamat;
        $datadiri->tanggal=$request->tanggal;
        $datadiri->usia=$request->usia;
        $datadiri->lulusan=$request->lulusan;
        $datadiri->keahlian=$request->keahlian;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('datadiriimage',$imagename);
        $datadiri->image = $imagename;


        $datadiri->save();
        return redirect()->back();
    }
}
