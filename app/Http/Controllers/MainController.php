<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;

use App\Models\Project;

use App\Models\Technology;

use App\Http\Requests\ErorrsMessages;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // parte index 
    public function indexP()
    {
        
        $projects = Project :: all();
       

        return view('pages.projects.projectList', compact('projects'));

    }

    public function indexTy()
    {
    
        $types = Type :: all();
        
        return view('pages.projects.typeList', compact('types'));

    }

    public function indexTc()
    {
    
        $technologies = Technology :: all();

        return view('pages.projects.technologiesList', compact('technologies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createP()
    {

        $types = Type :: all();

        $technologies = Technology :: all();

        return view('pages.add.createP',compact('types','technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeP(ErorrsMessages $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject ->nome_progetto = $data['nome_progetto'];
        $newProject ->img_riferimento = $data['img_riferimento'];
        $newProject ->descrizione = $data['descrizione'];
        $newProject ->data_pubblicazione = $data['data_pubblicazione'];

        $type = Type :: find($data['type_id']);
    
        //creazione relazione 1 a molti
        $newProject -> type() -> associate($type);

        $newProject -> save();

        //creazione relazione molti a molti
        $newProject -> technologies() -> attach($data['tech_id']);

        return redirect() -> route('projects.projectList');

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
