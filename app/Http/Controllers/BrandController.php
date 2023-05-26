<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StorebrandRequest;
use App\Http\Requests\UpdatebrandRequest;
use App\Models\Item;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('top5_flag', 1)->get();
        return view('/brand/top', [
            'title' => 'Top 5 Brands',
            'brands' =>$brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::find($id);
        $items = Item::where('brand_id', $id)->get();
        return view('/brand/details', [
            'title' => 'Brand Details',
            'items' => $items,
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebrandRequest  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebrandRequest $request, brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        //
    }
}
