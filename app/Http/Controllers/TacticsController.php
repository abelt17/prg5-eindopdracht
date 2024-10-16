<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class TacticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tactics = Tactic::all();
        return view('tactics.index', compact('tactics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tactics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tactic = new Tactic();
        $tactic->username = $request->input('username');
        $tactic->tactic_name = $request->input('tactic_name');
        $tactic->line_up = $request->input('line_up');
        $tactic->pression = $request->input('pression');
        $tactic->style = $request->input('style');
        $tactic->pace = $request->input('pace');
        $tactic->description = $request->input('description');
        $tactic->save();

        return redirect(route('tactics.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tactic $tactic)
    {
        return view('tactics.show', compact('tactic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tactic $tactic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tactic $tactic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tactic $tactic)
    {
        $tactic->delete();
        return redirect(route('tactics.index'));
    }
}
