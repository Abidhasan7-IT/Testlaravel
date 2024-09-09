<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function ourstore(Request $request){
        
        $post= new post;
        $post->name= $request->name;
        $post->description= $request->descripe;
        $post->save();
        return redirect()->route('index')->withSuccess('Successfully added');
    }
    
    public function editdata($id){
        $post = post::findOrFail($id);
        return view('edit', ['ourpost' => $post]);
    }

    public function updatedata($id,Request $request){
        $post = post::findOrFail($id);

        $post->name= $request->name;
        $post->description= $request->descripe;
        $post->save();
        return redirect()->route('index')->withSuccess('Successfully Updated');
    }
}
