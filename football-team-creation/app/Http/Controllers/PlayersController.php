<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;


class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $players = Player::where('team_id', $id)->get();

        return view('view-Players', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $teams = Team::all();

        // dd($teams);

        return view('add-player', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // return $request->all();
        $this->validate($request, [
            'player_name' => 'required',
            'position' => 'required',
            'team' => 'required',
        ]);
    
        $Player = new Player();
        $Player->player_name = $request->input('player_name');
        $Player->position = $request->input('position');
        $Player->team_id = $request->input('team');

        $team = Team::where('id', $Player->team_id)->get('team_name');

        $Player->team = $team->implode('team_name', ' ');
        
        $Player->save();
  
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
    public function edit($id)
    {
        $players = Player::where('id', $id)->first();

        $teams = Team::all();

        return view('edit-player', ['player' => $players], ['teams' => $teams]);

        

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
            'player_name' => 'required',
            'position' => 'required',
            'team' => 'required',
        ]);
    
    
        Player::where('id', $id)
        ->update(['player_name' => $request->input('player_name'),
                 'position'=>$request->input('position'),
                 'team'=>$request->input('team')]
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

        $players = Player::find($id);

        $players->delete();


        return redirect('view-players');
    }

}
