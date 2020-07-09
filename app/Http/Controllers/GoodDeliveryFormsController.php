<?php

namespace App\Http\Controllers;

use App\GoodDeliveryForms;
use Illuminate\Http\Request;

class GoodDeliveryFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gooddelivery.gooddelivery');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoodDeliveryForms  $goodDeliveryForms
     * @return \Illuminate\Http\Response
     */
    public function show(GoodDeliveryForms $goodDeliveryForms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoodDeliveryForms  $goodDeliveryForms
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodDeliveryForms $goodDeliveryForms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoodDeliveryForms  $goodDeliveryForms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodDeliveryForms $goodDeliveryForms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoodDeliveryForms  $goodDeliveryForms
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodDeliveryForms $goodDeliveryForms)
    {
        //
    }
}
