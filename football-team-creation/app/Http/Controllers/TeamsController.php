<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();


        return view('view-teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team_name' => 'required',
            'area' => 'required',
            'home_pitch' => 'required',
        ]);

        $Team = new Team();
        $Team->team_name = $request->input('team_name');
        $Team->area = $request->input('area');
        $Team->home_pitch = $request->input('home_pitch');
        $Team->save();


        return back()->with('success', 'sent');
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
    public function edit(request $request, $id)
    {
        $team = Team::where('id', $id)->first();

        return view('edit-team', compact('team'));
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

        // return $request->all();

        $this->validate($request, [
            'team_name' => 'required',
            'area' => 'required',
            'home_pitch' => 'required',
        ]);

        Team::where('id', $id)
            ->update(
                [
                    'team_name' => $request->input('team_name'),
                    'area' => $request->input('area'),
                    'home_pitch' => $request->input('home_pitch')
                ]
            );


        return back()->with('success', 'sent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::find($id);

        $teams->delete();

        return back();
    }
}
