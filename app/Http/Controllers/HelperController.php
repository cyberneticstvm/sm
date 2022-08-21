<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use DB;

class HelperController extends Controller
{
    public function index($slug){
        $page = DB::table('pages')->where('slug', $slug)->first();
        $sections = DB::table('sections')->where('page_id', $page->id)->get();
        //$contents = DB::table('contents')->where('page_id', $page->id)->get();
        //$contents = DB::table('contents')->where('page_id', $page->id)->get()->toArray();
        return view('web.page', compact('page', 'sections'));
    }
    public function getpagelist(){
        $data = DB::table('pages')->select('id', 'page_title as name')->get();
        return response()->json($data);
    }
    public function upload(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('tinymce', $fileName, 'public');
        return response()->json(['location'=>"/storage/".$path]);
        
        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/
    }
    public function listUpload(){
        $uploads = DB::table('file_uploads')->orderByDesc('id')->get();
        return view('admin.file-upload', compact('uploads'));
    }
    public function fileUpload(Request $request){
        $this->validate($request, [
            'file' => 'required',
        ]);
        $input = $request->all();
        $type = $request->file->getClientOriginalExtension();
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');        
        $upload = DB::table('file_uploads')->insert(['url' => $path, 'type' => $type]);

        $uploads = DB::table('file_uploads')->orderByDesc('id')->get();
        return redirect()->route('admin.listUpload')
                        ->with('success','File uploaded successfully');
    }
    public function deleteFile($id){
        DB::table('file_uploads')->where('id', $id)->delete();
        return redirect()->route('admin.listUpload')
                        ->with('success','File deleted successfully');
    }
}
