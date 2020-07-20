<?php

namespace App\Http\Controllers;

use App\GoodDeliveryForms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        // a dd($request);
        
        $validator = Validator::make($request->all(), [
            'delino' => 'required',
            'delidate' => 'required',
            'business' => 'required',
            'attn'=> 'required',
            'address'=>'required',
            'phno'=>'required',
            'description'=>'required',
            'issueby'=>'required',
            'receivedby'=>'required',


        ]);

        if ($validator->fails()) {
          
            return redirect('/gooddelivery')
                        ->withErrors($validator)
                        ->withInput();
        }
        // GoodDeliveryForms::create($request->all());
        $g_delivery=new GoodDeliveryForms();
        $g_delivery->gd_form_unique_id="234";
         $g_delivery->gd_business_name=$request->business;
        $g_delivery->gd_attn=$request->attn;
        $g_delivery->gd_address=$request->address;
        $g_delivery->gd_ph_no=$request->phno;
        $g_delivery->delivery_number=$request->delino;
        $g_delivery->delivery_date=$request->delidate;
        $g_delivery->gd_item="sdf";
        $g_delivery->gd_description	=$request->description;
        $g_delivery->gd_quantity="77";
        $g_delivery->gd_issued_by_name=$request->issueby;
        $g_delivery->gd_issued_by_date="2019-09-04 11:44:05";
        $g_delivery->gd_received_in_date="2019-09-04 11:44:05";
        $g_delivery->gd_received_in_name=$request->receivedby;


        $g_delivery->save();
      
         return view('gooddelivery.index',compact(['g_delivery']));
         
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
