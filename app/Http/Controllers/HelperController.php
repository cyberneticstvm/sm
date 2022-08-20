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
        $path=$request->file('file')->storeAs('tinymce', $fileName);
        return response()->json(['location'=>"/storage/".$path]);
        
        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/
    }
}
