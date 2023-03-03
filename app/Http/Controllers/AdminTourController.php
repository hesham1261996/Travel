<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class AdminTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(auth()->user()->status == false , 403);
        $tours = Tour::all();
        return view('admin.tours.index' , compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            abort_if(auth()->user()->status == false , 403);
            return view('admin.tours.create');
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
                'title' => 'required|max:50' , 
                'description' => 'required',
                'price' =>'integer',
                'time' => 'integer',
                'image' => ['mimes:jpge,png,jpg'] ,
                "user_id" => 'integer'
            ]);
            if(request()->hasFile('image')){
                $path = request('image')->store('/tours');
                $data['image'] = $path ;
            }
            $data = Tour::create($data) ;
            return redirect('/admins/tours');
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
        abort_if(auth()->user()->status == false , 403);
        $tour = Tour::find($id);
        return view('admin.tours.edit' , compact('tour'));
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
            'title' => 'required|max:50' , 
            'description' => 'required',
            'price' =>'integer',
            'time' => 'integer' ,
            'image' => ['mimes:jpge,png,jpg'],
        ]);
        $data['id'] = $id ;
        if(request()->hasFile('image')){
            $path = request('image')->store('/tours');
            $data['image'] = $path ;
        }
        Tour::whereId($id)->update($data) ;
        return redirect('/admins/tours');
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
        
        Tour::destroy($id);
        return redirect('/admins/tours');
    }
}
