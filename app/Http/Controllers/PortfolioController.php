<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     *Vista principal y/o donde se muestran el listado de elementos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [
            ['title' => 'Proyecto #1' ],
            ['title' => 'Proyecto #2' ],
            ['title' => 'Proyecto #3' ],
            ['title' => 'Proyecto #4' ],
        ];
        return view('portfolio', compact('portfolio'));
    }

    /**
     * muestra el formulario de ingreso de datos
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Almacena los datos ingresados en create
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * muestra un recurso especifico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * edita un elemento especifico
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * actualiza el elemento especifico editado
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
