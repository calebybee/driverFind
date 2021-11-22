<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidates.index')
            ->with('candidates', Candidate::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create');
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'salary' => 'required',
            'startdate' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:5048',
            'aboutme' => 'required|max:3000'
        ]);

        $newResumeName = uniqid() . '-' . $request->name . '.' . $request->resume->extension();

        $request->resume->move(public_path('resumes'), $newResumeName);

        Candidate::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'resume_path' => $newResumeName,
            'salary' => $request->input('salary'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'startdate' => $request->input('startdate'),
            'aboutme' => $request->input('aboutme'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/candidates')->with('message', 'Your application has been received!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('candidates.show')
            ->with('candidate', Candidate::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('candidates.edit')
            ->with('candidate', Candidate::where('id', $id)->first());
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'salary' => 'required',
            'startdate' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:5048',
            'aboutme' => 'required|max:3000'
        ]);
        
        Candidate::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'resume_path' => $newResumeName,
                'salary' => $request->input('salary'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'startdate' => $request->input('startdate'),
                'aboutme' => $request->input('aboutme'),
                'user_id' => auth()->user()->id
            ]);
        return redirect('/candidates')
            ->with('message', 'Your application has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = Candidate::where('id', $id);
        $candidate->delete();

    }
}
