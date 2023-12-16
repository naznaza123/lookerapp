<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['data_users'] =  DataUser::all();
        return view ('admin.index');
    }
    public function accept_post($id){
        $data=Post::find($id);
        $data->post_status='active';
        $data->save();
        return redirect()->back()->with('message','Postingan di publikasi');
    }
    public function reject_post($id){
        $data=Post::find($id);
        $data->post_status='rejected';
        $data->save();
        return redirect()->back()->with('message','Postingan di tolak');
    }
    public function post_page(){
        return view ('admin.post_page');
    }
    public function add_post(Request $request){
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;
        $post=new Post;

        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_status='active';
        $post->user_id=$userid;
        $post->name=$name;
        $post->usertype=$usertype;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image = $imagename;


        $post->save();
        return redirect()->back()->with('message','Berhasil diposting,Menunggu persetujuan admin');


    }
    public function show_post(){
        $post =Post::all();
        return view ('admin.show_post',compact('post'));
    }
    public function delete_post($id){
        $post= Post::find($id);
        $post->delete();
        return redirect()->back()->with('message','postingan sudah dihapus');
    }
    public function edit_post($id){
        $post=Post::find($id);
        return view ('admin.edit_post',compact('post')); 
    }
    public function update_post(Request $request,$id){
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
