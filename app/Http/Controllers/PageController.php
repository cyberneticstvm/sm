<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

use DB;
use Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
        return view('admin.page-list', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$controls = DB::table('controls')->pluck('name', 'id')->all();
        $controls = DB::table('controls')->select('name', 'id')->get();
        return view('admin.create-page', compact('controls'));
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
            'page_title' => 'required|unique:pages,page_title',
        ]);
        $input = $request->all();
        $input['created_by'] = 1;
        $input['slug'] = str_replace(' ', '-', Str::lower($input['page_title']));
        try{
            $page = Page::create($input);
            if(!empty($input['stype']) && count($input['stype']) > 0):
                for($i=0; $i<count($input['stype']); $i++):
                    if($input['stype'][$i] > 0):
                        $sid = DB::table('sections')->insertGetId([
                            'page_id' => $page->id,
                            'control_id' => $input['stype'][$i],
                            'control_count' => $input['scount'][$i],
                        ]);
                        if($input['cctype'] && count($input['cctype']) > 0):
                            for($j=0; $j<count($input['cctype']); $j++):
                                if($input['cctype'][$j] > 0):
                                    if($input['stype'][$i] == $input['sectype'][$j]):
                                        DB::table('contents')->insert([
                                            'page_id' => $page->id,
                                            'section_id' => $sid,
                                            'content_type' => $input['cctype'][$j],
                                            'content_title' => $input['content_title'][$j],
                                            'content' => $input['ccontent'][$j],
                                        ]);
                                    endif;
                                endif;
                            endfor;
                        endif;
                    endif;
                endfor;
            endif;
        }catch(Exception $e){
            throw $e;
        }
        
        return redirect()->route('admin.page-list')
                        ->with('success','Page created successfully');
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
        $page = Page::find($id);
        $sections = DB::table('sections')->where('page_id', $id)->get();
        $contents = DB::table('contents')->where('page_id', $id)->get();
        $controls = DB::table('controls')->select('name', 'id')->get();
        return view('admin.edit-page', compact('page', 'sections', 'contents', 'controls'));
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
            'page_title' => 'required|unique:pages,page_title,'.$id,
        ]);
        $input = $request->all();
        $input['created_by'] = 1;
        $input['slug'] = str_replace(' ', '-', Str::lower($input['page_title']));
        try{
            $page = Page::find($id);
            $page->update($input);
            DB::table('sections')->where('page_id', $id)->delete();
            DB::table('contents')->where('page_id', $id)->delete();
            if(!empty($input['stype']) && count($input['stype']) > 0):
                for($i=0; $i<count($input['stype']); $i++):
                    if($input['stype'][$i] > 0):
                        $sid = DB::table('sections')->insertGetId([
                            'page_id' => $page->id,
                            'control_id' => $input['stype'][$i],
                            'control_count' => $input['scount'][$i],
                        ]);
                        if($input['cctype'] && count($input['cctype']) > 0):
                            for($j=0; $j<count($input['cctype']); $j++):
                                if($input['cctype'][$j] > 0):
                                    if($input['stype'][$i] == $input['sectype'][$j]):
                                        DB::table('contents')->insert([
                                            'page_id' => $page->id,
                                            'section_id' => $sid,
                                            'content_type' => $input['cctype'][$j],
                                            'content_title' => $input['content_title'][$j],
                                            'content' => $input['ccontent'][$j],
                                        ]);
                                    endif;
                                endif;
                            endfor;
                        endif;
                    endif;
                endfor;
            endif;
        }catch(Exception $e){
            throw $e;
        }
        
        return redirect()->route('admin.page-list')
                        ->with('success','Page created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        DB::table('sections')->where('page_id', $id)->delete();
        DB::table('contents')->where('page_id', $id)->delete();
        return redirect()->route('admin.page-list')
                        ->with('success','Page deleted successfully');
    }
}
