<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles = Mobile::all();
        return view('mobiles.index', compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('mobiles.create_edit', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mobile::create($request->all());
        return redirect()->route('mobiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function getMobile($code)
    {
        $mobile = Mobile::where('barcode', $code)
            ->orWhere('imei', $code)
            ->first();
        $data = new \stdClass();

        if ($mobile) {
            $brand = Brand::find($mobile->brand_id);
            $data->id = $mobile->id;
            $data->brand = $brand->name;
            $data->model = $mobile->model;
            $data->ref = $mobile->reference;
            $data->bar = $mobile->barcode;
            $data->imei = $mobile->imei;
            $data->batch = $mobile->batch;
        }

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobile $mobile)
    {
        //
    }
}
