<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\NewsAndEvents;
use DB;

class HelperController extends Controller
{
    public function home(){
        $sliders = DB::table('sliders')->orderBy('order_by')->get();
        $news = DB::table('news_and_events')->orderBy('date')->limit(3)->get();
        $whats = DB::table('whats_news')->orderBy('created_at')->limit(5)->get();
        return view('web.index', compact('sliders', 'news', 'whats'));
    }
    public function index($slug){
        $page = DB::table('pages')->where('slug', $slug)->first();
        $sections = DB::table('sections')->where('page_id', $page->id)->get();        
        //$contents = DB::table('contents')->where('page_id', $page->id)->get();
        //$contents = DB::table('contents')->where('page_id', $page->id)->get()->toArray();
        return view('web.page', compact('page', 'sections'));
    }
    public function seeallnews(){
        $news = DB::table('news_and_events')->orderBy('date')->get();
        return view('web.see-all-news', compact('news'));
    }
    public function singlenews($id){
        $news = NewsAndEvents::find($id);
        return view('web.see-single-news', compact('news'));
    }
    public function gorder(){
        $gos = DB::table('govt_orders')->orderByDesc('go_date')->get();
        return view('web.government-orders', compact('gos'));
    }
    public function photogallery(){
        $albums = DB::table('albums')->orderByDesc('created_at')->get();
        return view('web.photo-gallery', compact('albums'));
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
