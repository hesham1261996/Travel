<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(auth()->user()->status == false , 403);
        $blogs = Blog::orderBy('id' , 'DESC')->simplePaginate(15);
        return view('admin.blogs.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        abort_if(auth()->user()->status == false , 403);
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(auth()->user()->status == false , 403);
        $data = request()->validate([
            'title' => 'required|max:50',
            'body'  => 'required' ,
            'user_id' => 'required'
        ]);
        if(request()->hasFile('image')){
            $path = request('image')->store('/blogs');
            $data['image'] = $path ;
        }
        Blog::create($data);
        return redirect('admins/blogs');
    }
    
    public function edit($id)
    {
        abort_if(auth()->user()->status == false , 403);
        $blog = Blog::find($id);
        return view('admin.blogs.edit' , compact('blog'));
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
        abort_if(auth()->user()->status == false , 403);
        $data = request()->validate([
            'title' => 'required|max:50',
            'body'  => 'required' ,
            'image' => ['mimes:jpge,png,jpg'],
        ]);

        if(request()->hasFile('image')){
            $path = request('image')->store('/blogs');
            $data['image'] = $path ;
        }
        Blog::whereId($id)->update($data);
        return redirect('admins/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(auth()->user()->status == false , 403);
        Blog::destroy($id);
        return redirect('admins/blogs');
    }
}
