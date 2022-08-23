<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

use DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::get();
        return view('admin.album-list', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-album');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'album_title' => 'required|unique:albums,album_title',
            'imgs' => 'required',
        ]);
        $input = $request->all();
        $album = Album::create($input);
        foreach($request->file('imgs') as $key => $file):
            $fileName = $file->getClientOriginalName();
            $path = $file->storeAs('albums/'.$album->id, $fileName, 'public');
            DB::table('album_images')->insert(['album_id' => $album->id, 'img_name' => $fileName]);
        endforeach;
        return redirect()->route('admin.album-list')
            ->with('success','GO created successfully');
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
        Album::find($id)->delete();
        return redirect()->route('admin.album-list')
                        ->with('success','Album deleted successfully');
    }
}
