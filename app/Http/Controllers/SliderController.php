<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

use DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider-list', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-slider');
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
            'name' => 'required',
            'img_url' => 'required',
            'order_by' => 'required',
        ]);
        $input = $request->all();        
        $fileName=$request->file('img_url')->getClientOriginalName();
        $path=$request->file('img_url')->storeAs('slider', $fileName, 'public');
        $input['img_url'] = $path;
        $slider = Slider::create($input);
        return redirect()->route('admin.slider-list')
                        ->with('success','Slider item created successfully');
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
        $slider = Slider::find($id);
        return view('admin.edit-slider', compact('slider'));
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
            'name' => 'required',
            'order_by' => 'required',
        ]);
        $input = $request->all();
        $slider = Slider::find($id);
        if(!empty($request->file('img_url'))):       
            $fileName=$request->file('img_url')->getClientOriginalName();
            $path=$request->file('img_url')->storeAs('slider', $fileName, 'public');
            $input['img_url'] = $path;
        else:
            $input['img_url'] = $slider->getOriginal('img_url');
        endif;        
        $slider->update($input);
        return redirect()->route('admin.slider-list')
                        ->with('success','Slider item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('admin.slider-list')
                        ->with('success','Slider item deleted successfully');
    }
}
