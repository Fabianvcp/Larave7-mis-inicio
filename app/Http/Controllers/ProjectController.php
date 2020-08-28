<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     *Vista principal y/o donde se muestran el listado de elementos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projects = DB::table('projects')->get(); orm comun
        // $projects = Project::latest('updated_at)->get(); ultima actualización
        //$projects = Project::get();
        //$projects = Project::latest()->paginate();  paginación

        return view('projects.index',[
            'projects' => Project::latest()->paginate()
        ]);
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
    public function show(Project $project)
    {
        //  busca los datos con el mismo id
        // $project = Project::find($id);

        return view('projects.show',[
            'project' => $project
        ]);
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
