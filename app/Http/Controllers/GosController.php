<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GovtOrder;

use DB;


class GosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gos = GovtOrder::leftJoin('go_types as t', 'govt_orders.type_id', '=', 't.id')->select('govt_orders.id', 'govt_orders.go_subject', 'govt_orders.go_date', 'govt_orders.order_by', 'govt_orders.go_doc', 't.name')->orderByDesc('govt_orders.go_date')->get();
        return view('admin.gos-list', compact('gos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DB::table('go_types')->get();
        return view('admin.create-gos', compact('types'));
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
            'type_id' => 'required',
            'go_date' => 'required',
            'order_by' => 'required',
            'go_doc' => 'required',
            'go_subject' => 'required',
        ]);
        $input = $request->all();        
        $fileName=$request->file('go_doc')->getClientOriginalName();
        $path=$request->file('go_doc')->storeAs('gos', $fileName, 'public');
        $input['go_doc'] = $path;
        $go = GovtOrder::create($input);
        return redirect()->route('admin.gos-list')
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
        $go = GovtOrder::find($id);
        $types = DB::table('go_types')->get();
        return view('admin.edit-gos', compact('go', 'types'));
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
            'type_id' => 'required',
            'go_date' => 'required',
            'order_by' => 'required',
            'go_doc' => 'required',
            'go_subject' => 'required',
        ]);
        $input = $request->all();        
        $fileName=$request->file('go_doc')->getClientOriginalName();
        $path=$request->file('go_doc')->storeAs('gos', $fileName, 'public');
        $input['go_doc'] = $path;
        $go = GovtOrder::find($id);
        $go->update($input);
        return redirect()->route('admin.gos-list')
                        ->with('success','GO updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GovtOrder::find($id)->delete();
        return redirect()->route('admin.gos-list')
                        ->with('success','GO deleted successfully');
    }
}
