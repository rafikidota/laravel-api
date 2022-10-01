<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'ok' => true,
            'msg' => 'List of products',
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Calzone',
                    'type' => 'meal',
                    'price' => 320,
                    'currency' => 'CUP'
                ],
                [
                    'id' => 2,
                    'name' => 'Rum Ritual',
                    'type' => 'drink',
                    'price' => 9.15,
                    'currency' => 'MLC'
                ],
                [
                    'id' => 3,
                    'name' => 'Dota 2',
                    'type' => 'game',
                    'price' => 0,
                    'currency' => 'free'
                ],
                [
                    'id' => 4,
                    'name' => 'Telegram Plus',
                    'type' => 'subscription_premium',
                    'price' => 3.99,
                    'currency' => 'USD'
                ],
                [
                    'id' => 5,
                    'name' => 'The Feast of Abscession',
                    'type' => 'arcane_item',
                    'price' => 28.72,
                    'currency' => 'USD'
                ],
            ]
        ];

        return response()->json([
            'data' => $data,
            'code' => 200
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
