<?php

namespace App\Http\Controllers;

use App\venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*date_default_timezone_set('America/Bahia');
        $data_atual = date('Y-m-d H:i:s', time());
        $produto->data_venda = $data_atual;*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(venda $venda)
    {
        //
    }
}
