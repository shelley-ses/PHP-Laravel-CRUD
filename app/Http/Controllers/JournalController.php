<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    // Show all journals
    public function index()
    {
        $journals = Journal::all();
        return view('journals.index', compact('journals'));
    }

  
    public function create()
    {
        return view('journals.create');
    }

    // new journal
    public function store(Request $request)
    {
        $request->validate([
            'mood' => 'required',
            'explanation' => 'required',
        ]);

        Journal::create($request->all());

        return redirect()->route('journals.index')->with('success', 'Journal entry created!');
    }

    // single journal
    public function show(Journal $journal)
    {
        return view('journals.show', compact('journal'));
    }

    // edit form
    public function edit(Journal $journal)
    {
        return view('journals.edit', compact('journal'));
    }

    // Update journal
    public function update(Request $request, Journal $journal)
    {
        $request->validate([
            'mood' => 'required',
            'explanation' => 'required',
        ]);

        $journal->update($request->all());

        return redirect()->route('journals.index')->with('success', 'Journal entry updated!');
    }

    // Delete journal
    public function destroy(Journal $journal)
    {
        $journal->delete();

        return redirect()->route('journals.index')->with('success', 'Journal entry deleted!');
    }
}
