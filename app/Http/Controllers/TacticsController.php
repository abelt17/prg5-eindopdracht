<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Support\Facades\Auth;
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
        $tactic->username = Auth::user()->name;
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
        return view('tactics.edit', compact('tactic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tactic $tactic)
    {
        // Step 1: Validate the incoming data
        $validatedData = $request->validate([
            'tactic_name' => 'required|string|max:255',
            'line_up' => 'required|string|max:255',
            'pression' => 'required|string|max:255',  // Keep as a string since it's stored as a string
            'style' => 'required|string|max:255',
            'pace' => 'required|string|max:255',  // Keep as a string since it's stored as a string
            'description' => 'nullable|string',  // No max length since it's a text field
        ]);
        // Step 2: Update the tactic in the database
        $tactic->update($validatedData);

        // Step 3: Redirect back to the list of tactics (or wherever you need)
        return redirect()->route('tactics.index')->with('success', 'Tactic updated successfully.');

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
