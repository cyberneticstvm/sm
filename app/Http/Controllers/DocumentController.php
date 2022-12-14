<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Str;

use DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DB::table('documents as d')->leftJoin('document_types as t', 'd.document_type', '=', 't.id')->selectRaw("d.id, d.doc_url, d.title, t.name as type, d.preview")->get();
        return(view('admin.document-list', compact('documents')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DB::table('document_types')->get();
        return view('admin.create-document', compact('types'));
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
            'document_type' => 'required',
            'title' => 'required',
        ]);
        $input = $request->all();
        if(!empty($request->file('doc'))):        
            //$fileName=$request->file('doc')->getClientOriginalName();
            $fileName = Str::random(9);
            $path=$request->file('doc')->storeAs('iecdocs', $fileName, 'public');
            $input['doc_url'] = $path;
        endif;
        if(!empty($request->file('preview'))):        
            //$fileName=$request->file('preview')->getClientOriginalName();
            $fileName = Str::random(9);
            $path=$request->file('preview')->storeAs('iecdocs/previews', $fileName, 'public');
            $input['preview'] = $path;
        endif;
        $doc = Document::create($input);
        return redirect()->route('admin.document-list')
                        ->with('success','Document created successfully');
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
        $doc = Document::find($id);
        $types = DB::table('document_types')->get();
        return view('admin.edit-document', compact('doc', 'types'));
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
            'document_type' => 'required',
            'title' => 'required',
        ]);
        $input = $request->all();
        $doc = Document::find($id);
        if(!empty($request->file('doc'))):        
            //$fileName=$request->file('doc')->getClientOriginalName();
            $fileName = Str::random(9);
            $path=$request->file('doc')->storeAs('iecdocs', $fileName, 'public');
            $input['doc_url'] = $path;
        else:
            $input['doc_url'] = $doc->getOriginal('doc_url');
        endif;
        if(!empty($request->file('preview'))):        
            //$fileName=$request->file('preview')->getClientOriginalName();
            $fileName = Str::random(9);
            $path=$request->file('preview')->storeAs('iecdocs/previews', $fileName, 'public');
            $input['preview'] = $path;
        else:
            $input['preview'] = $doc->getOriginal('preview');
        endif;
        $doc->update($input);
        return redirect()->route('admin.document-list')
                        ->with('success','Document updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Document::find($id)->delete();
        return redirect()->route('admin.document-list')
                        ->with('success','Document deleted successfully');
    }
}
