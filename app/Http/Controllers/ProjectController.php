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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        //
        $cadena = request('title');

        $cadenaConvert = strtr($cadena, " ", "-");


        Project:: create([
            'title' => request('title'),
            'url' => $cadenaConvert,
            'description' => request('description')
        ]);

        return redirect()->route('projects.index');

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
    public function edit(Project $project)
    {
        //
        return view('projects.edit',[
            'project' => $project
        ]);

    }

    /**
     * actualiza el elemento especifico editado
     *
     * @param Project $project
     * @return Project
     */
    public function update(SaveProjectRequest $project)
    {
        //
        $cadena = request('title');

        $cadenaConvert = strtr($cadena, " ", "-");

        $project->update([
            'title' => request('title'),
            'url' => $cadenaConvert,
            'description' => request('description')
        ]);

        return redirect()->route('projects.show',$project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('projects.index');
    }
}
