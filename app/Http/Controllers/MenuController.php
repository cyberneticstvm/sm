<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::leftJoin('menu_types as mt', 'menus.menu_type_id', '=', 'mt.id')->leftJoin('pages as p', 'p.id', 'menus.page_id')->select('menus.id', 'menus.menu_item_name', 'menus.publish', 'menus.parent', 'mt.name as tname', 'p.page_title as page', 'p.slug')->where('menus.publish', 1)->orderBy('menu_item_name')->get();
        return view('admin.menu-list', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_types = DB::table('menu_types')->get();
        $pages = DB::table('pages')->where('publish', 1)->get();
        $menus = Menu::where('parent', 0)->get();
        return view('admin.create-menu', compact('menu_types', 'pages', 'menus'));
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
            'menu_item_name' => 'required',
            'menu_type_id' => 'required',
            'page_id' => 'required',
            'order_by' => 'required',
        ]);
        $input = $request->all();
        $menu = Menu::create($input);
        return redirect()->route('admin.menu-list')
                        ->with('success','Menu created successfully');
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
        $menu = Menu::find($id);
        $menu_types = DB::table('menu_types')->get();
        $pages = DB::table('pages')->where('publish', 1)->get();
        $menus = Menu::where('parent', 0)->get();
        return view('admin.edit-menu', compact('menu', 'menu_types', 'pages', 'menus'));
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
            'menu_item_name' => 'required',
            'menu_type_id' => 'required',
            'page_id' => 'required',
            'order_by' => 'required',
        ]);
        $input = $request->all();
        $menu = Menu::find($id);
        $menu->update($input);
        return redirect()->route('admin.menu-list')
                        ->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect()->route('admin.menu-list')
                        ->with('success','Menu deleted successfully');
    }
}
