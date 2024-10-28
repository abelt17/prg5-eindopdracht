<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TacticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filteredLineUp = $request->get('line_up');
        $tactics = Tactic::all();
        $formations = Formation::all();
        return view('tactics.index', compact('tactics', 'formations', 'filteredLineUp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations = Formation::all();
        return view('tactics.create', compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tactic = new Tactic();
        $tactic->username = Auth::user()->name;
        $tactic->user_id = Auth::user()->id;
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
        $formations = Formation::all();
        return view('tactics.edit', compact('tactic', 'formations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tactic $tactic)
    {
        $validatedData = $request->validate([
            'tactic_name' => 'required|string',
            'line_up' => 'required|string',
            'pression' => 'required|string',
            'style' => 'required|string',
            'pace' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $tactic->update($validatedData);

        return redirect()->route('tactics.index')->with('success', 'Tactic change succesfull!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tactic $tactic)
    {
        $tactic->delete();
        return redirect(route('tactics.index'));
    }

    public function myTactics()
    {
        $tactics = Tactic::where('user_id', Auth::id())->get();

        return view('tactics.my-tactics', compact('tactics'));
    }

}
