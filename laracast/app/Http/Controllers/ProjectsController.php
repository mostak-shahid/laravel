<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth')->only(['store','update']);
        // $this->middleware('auth')->except(['index','show']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->user()->projects;
        // auth()->check() //0 or 1
        // auth()->id(); //0 or user id
        // auth()->user(); // User class
        // auth()->guest(); //0 or 1
        // $projects = Project::where('user_id', auth()->id())->get();
        // $projects = Project::all();
        //return view('projects.index', ['projects' => $projects]);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //dd($request);
    //     //dd($request->all());
    //     // return request()->all();
    //     // return request(['title', 'description']);
    //     // return request('title');
    //     $project = new Project;
    //     // $project->title = request('title');
    //     // $project->description = request('description');
    //     $project->title = $request->title;
    //     $project->description = $request->description;
    //     $project->save();
    //     return redirect('/projects');
    // }
    public function store(Request $request)
    {
        // request()->validate([
        //     'title' => ['required','min:3'],
        //     'description' => 'required|max:10',
        // ]);
        // $validated = request()->validate([
        //     'title' => ['required','min:3'],
        //     'description' => 'required|max:10',
        // ]);
        $validated = $this->validateProject();
        $validate['user_id'] => auth()->id();
        /*This will through a $errors class, if data not validated, we can find those errors on the from page as $errors->all(), $errors->any(), $errors->has('fieldname')
        for more https://laravel.com/docs/5.8/validation#available-validation-rules
        */
        // Project::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        // ]);
        // Project::create(request(['title', 'description']));
         Project::create($validated);
        //Project::create($validated + ['user_id' => auth()->id()]);
        /*for using create method, a protected property has dicleare in the corresponding modell
        protected $fillable = ['title', 'description'];
        protected $guarded = [] will do the opposite
        */
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('projects.show', compact('project'));
    // }
    public function show(Project $project)
    {
        // if ($project->user_id !== auth()->id()){
        //     abort(403);
        // }
        // abort_unless ($project->user_id == auth()->id(), 403);
        abort_if ($project->user_id !== auth()->id(), 403);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('projects.edit', compact('project'));
    // }
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // return request()->all();
    //     $project = Project::find($id);
    //     $project->title = $request->title;
    //     $project->description = $request->description;
    //     $project->save();
    //     return redirect('/projects');
    // }
    public function update(Request $request, Project $project)
    {
        
        // $validated = request()->validate([
        //     'title' => ['required','min:3'],
        //     'description' => 'required|max:10',
        // ]);
        // return request()->all();
        // $project->title = $request->title;
        // $project->description = $request->description;
        // $project->save();
        //$project->update($validated);
        $project->update($this->validateProject());
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $project = Project::find($id)->delete();
    //     return redirect('/projects');
    // }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
    protected function validateProject()
    {
        return request()->validate([
            'title' => ['required','min:3'],
            'description' => 'required|max:10',
        ]);
    }
}
