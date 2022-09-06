<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatsNew;

use DB;

class WhatsNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wns = DB::table('whats_news as w')->leftJoin('whats_new_category as c', 'w.category', '=', 'c.id')->select('w.id', 'w.title', 'w.doc_type', 'w.url', 'w.document', 'c.name')->get();
        return view('admin.whats-new-list', compact('wns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('whats_new_category')->get();
        return view('admin.create-whats-new', compact('categories'));
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
            'doc_type' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        if(!empty($request->file('document'))):        
            $fileName=$request->file('document')->getClientOriginalName();
            $path=$request->file('document')->storeAs('whats-new', $fileName, 'public');
            $input['document'] = $path;
        endif;
        $wn = WhatsNew::create($input);
        return redirect()->route('admin.whats-new-list')
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
        $categories = DB::table('whats_new_category')->get();
        $wn = WhatsNew::find($id);
        return view('admin.edit-whats-new', compact('categories', 'wn'));
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
            'doc_type' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        if(!empty($request->file('document'))):        
            $fileName=$request->file('document')->getClientOriginalName();
            $path=$request->file('document')->storeAs('whats-new', $fileName, 'public');
            $input['document'] = $path;
        endif;
        $wn = WhatsNew::find($id);
        $wn->update($input);
        return redirect()->route('admin.whats-new-list')
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
        WhatsNew::find($id)->delete();
        return redirect()->route('admin.whats-new-list')
                        ->with('success','Record deleted successfully');
    }
}
