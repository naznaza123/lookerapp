<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Datadiri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id()){
            $post=Post::where('post_status','=','active')->get();
            $usertype=Auth()->user()->usertype;

            if ($usertype=='user') {
             $post=Post::all();
            return view('home.homepage',compact('post'));
            }else if ($usertype=='admin') {
                return view('admin.index',compact('post'));
            }else{
                return view ('user.index',compact('post'));
            }
        }
    }
    public function homepage(){
        $post=Post::where('post_status','=','active')->get();
        return view ('home.homepage',compact('post'));
    }
    public function post_detail($id){
        $post=Post::find($id);
        return view ('home.post_detail',compact('post'));
    }
    public function create_post(){
        return view ('home.create_post');
    }
    public function my_post(){
        $user=Auth::user();
        $userid=$user->id;
        $data= Post::where('user_id','=',$userid )->get();
        return view ('home.my_post',compact('data'));

    }
    public function my_post_del($id){
        $data= Post::find($id);
        $data->delete();
        return redirect()->back()->with('message','postingan sudah dihapus');
    }
    public function update_post_data( Request $request, $id){
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function post_update_page($id){
        $data= Post::find($id);
        return view ('home.post_page',compact('data'));
    }
    public function user_post(Request $request){
        $user=Auth()->user();
        $userid=$user->id;
        $username=$user->name;
        $usertype=$user->usertype;
        $post = new Post;

        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_status='pending';
        $post->user_id=$userid;
        $post->name=$username;
        $post->usertype=$usertype;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image = $imagename;


        $post->save();
        return redirect()->back()->with('message','Berhasil diposting,Menunggu persetujuan admin');



    }
    public function tambah_data_diri(){
        return view ('home.tambah_data_diri');
    }
    public function data_diri(){
        $datadiri = Datadiri::all();
        return view ('home.data_diri',compact('datadiri'));
    }
    public function buat_data_diri(Request $request){
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
