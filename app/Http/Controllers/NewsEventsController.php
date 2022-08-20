<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsAndEvents;

use DB;

class NewsEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news_and_events as n')->leftJoin('districts as d', 'n.district', '=', 'd.id')->select('n.id', 'n.title', 'n.img_url', 'n.date', 'n.content', 'd.name')->get();
        return view('admin.news-events-list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = DB::table('districts')->get();
        return view('admin.create-news-events', compact('districts'));
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
            'title' => 'required',
            'date' => 'required',
            'district' => 'required',
            'img_url' => 'required',
            'content' => 'required',
        ]);
        $input = $request->all();
        if(!empty($request->file('img_url'))):        
            $fileName=$request->file('img_url')->getClientOriginalName();
            $path=$request->file('img_url')->storeAs('news-events', $fileName, 'public');
            $input['img_url'] = $path;
        endif;
        $ne = NewsAndEvents::create($input);
        return redirect()->route('admin.news-events-list')
                        ->with('success','Record created successfully');
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
        $districts = DB::table('districts')->get();
        $ne = NewsAndEvents::find($id);
        return view('admin.edit-news-events', compact('districts', 'ne'));
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
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'district' => 'required',
            'content' => 'required',
        ]);
        $input = $request->all();
        if(!empty($request->file('img_url'))):        
            $fileName=$request->file('img_url')->getClientOriginalName();
            $path=$request->file('img_url')->storeAs('news-events', $fileName, 'public');
            $input['img_url'] = $path;
        endif;
        $ne = NewsAndEvents::find($id);
        $ne->update($input);
        return redirect()->route('admin.news-events-list')
                        ->with('success','Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsAndEvents::find($id)->delete();
        return redirect()->route('admin.news-events-list')
                        ->with('success','Record deleted successfully');
    }
}
