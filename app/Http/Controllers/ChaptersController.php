<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// Name space in the model
use App\chapters;

use Session;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = chapters::all();

        return view('chapters.index', compact('chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chapters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

            'title' => 'required|min:1|max:255',
            'description' => 'required|min:1',
            'chapter' => 'required|min:1'

        ));

        $brandNewChapter = new chapters;

        $brandNewChapter->title = $request->title;
        $brandNewChapter->description = $request->description;
        $brandNewChapter->chapter = $request->chapter;


        $brandNewChapter->save();

        Session::flash('success', 'The chapter was successfully saved');

        return redirect('/chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapter = chapters::find($id);
        return view('chapters.show')->with('chapter', $chapter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapter = chapters::find($id);

        return view('chapters.edit', compact('chapter'));
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
        $this->validate($request, array(
            'title' => 'required|min:1|max:255',
            'description' => 'required|min:1',
            'chapter' => 'required|min:1'

            ));

        $chapter = chapters::find($id);

        $chapter->title = $request->input('title');
        $chapter->description = $request->input('description');
        $chapter->chapter= $request->input('chapter');

        $chapter->save();

        Session::flash('success', 'This chapter was successfully saved.');

        return redirect()->route('chapters.show', $chapter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapter = chapters::find($id);

        $chapter->delete();

        Session::flash('success', 'The chapter was successfully deleted');

        return redirect()->route('chapters.index');
    }
}
