<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     *Vista principal y/o donde se muestran el listado de elementos.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth')->only('create','edit');
        //except proteguetodo menos lo que marques dentro de lo parentecis
        $this->middleware('auth')->except('index','show');
    }


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
        return  view('projects.create',[
            'project' => new Project
        ]);
    }

    /**
     * Almacena los datos ingresados en create
     *
     * @param SaveProjectRequest $project
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $project)
    {
        //
        $cadena = request('title');

        $cadenaConvert = strtr($cadena, " ", "-");


        Project:: create([
            'title' => request('title'),
            'url' => $cadenaConvert,
            'description' => request('description')
        ]);

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');

    }

    /**
     * muestra un recurso especifico.
     *
     * @param Project $project
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
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('projects.edit',[
            'project' => $project
        ]);

    }

    /**
     * Almacena los datos ingresados en create
     *
     * @param SaveProjectRequest $project
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        //
        $cadena = request('title');

        $cadenaConvert = strtr($cadena, " ", "-");

        $project->update([
            'title' => request('title'),
            'url' => $cadenaConvert,
            'description' => request('description')
        ]);

        return redirect()->route('projects.show',$project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue Eliminado con éxito');
    }
}
