<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('teacher.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:45',
            'slug' => 'required|unique:subjects|min:5|max:45',
            'description' => 'required|min:5|max:100'
        ]);

        $subject = Subject::create($request->all());

        return redirect()->route('teacher.subjects.edit', compact('subject'))->with('info', '¡La materia se creó con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('teacher.subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('teacher.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|min:5|max:45',
            'slug' => "required|min:5|max:45|unique:subjects,slug,$subject->id",
            'description' => 'required|min:5|max:100'
        ]);

        $subject->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ]);

        return redirect()->route('teacher.subjects.edit', $subject)->with('info', '¡La materia se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('teacher.subjects.index',)->with('info', '¡La materia se eliminó exitosamente!');
    }
}
