<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\wifi_dataResource;
use Illuminate\Http\Request;
use App\Models\wifi_data;


class wifi_dataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {

 //
        $wifi_data = wifi_data::all();
        return wifi_dataResource::collection($wifi_data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //
         $validation = $request -> validate([
         'date' => 'required|string',
            'trade_code' => 'required|string',
            'high' => 'required|numeric',
            'low' => 'required|numeric',
            'open' => 'required|numeric',
            'close' => 'required|numeric',
            'volume' => 'required|numeric',

        ]);

        $wifi_data = wifi_data::create($validation);
        return new wifi_dataResource($wifi_data);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return new wifi_dataResource(wifi_data::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wifi_data $wifi_data)
    {
        //
        $validation = $request -> validate([
           'date' => 'required|string',
            'trade_code' => 'required|string',
            'high' => 'required|numeric',
            'low' => 'required|numeric',
            'open' => 'required|numeric',
            'close' => 'required|numeric',
            'volume' => 'required|numeric',

        ]);

        $wifi_data -> update($validation);
        return new wifi_dataResource($wifi_data);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        //
        wifi_data::destroy($id);
        // $wifi_data ->delete();
         return response ()->json(['message'=>'wifi_data deleted successfully']) ;
        // return response()->json($wifi_data);

    }






}
