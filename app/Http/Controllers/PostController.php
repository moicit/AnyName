<?php

namespace MOIC\Http\Controllers;

use Illuminate\Http\Request;
use MOIC\Post;
use MOIC\Writer;

class PostController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>[ 'show'] ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Post::all();
        return view('Post.index')->with('posts', $all );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Post.create');
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
        $this->validate($request,[
            'title'=>'required',
            'body' =>'required',
            'tag'  =>'required'
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $name = $request->input('name');
        $writer = Writer::where('name',$name)->get();
        $writer_id = 0;
        if(count($writer)==1)
        {
            $writer_id = $writer[0]['id'];
        }
        else
        {
            $writer = new Writer;
            $writer->name = $name;
            if($request->hasFile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
                $writer->avatar = $filename;
            }
            $writer->save();
            $writer_id = $writer->id;

        }
        $post->writer_id = $writer_id;
        $post->tag = $request->input('tag');
        $post->save();
        return redirect('/post')->with('success',"Post Created successfully !!");
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
        return Post::find($id);
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
        $post = Post::find($id);
        $writer = Writer::find($post->id);
        return view('post.update')->with(['post'=>$post , 'writer' =>$writer]);
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
        $this->validate($request,[
            'title'=>'required',
            'body' =>'required'
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/post')->with('success',"Post Updated successfully !!");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post')->with('success',"Post deleted successfully !!");
        //
    }
}
