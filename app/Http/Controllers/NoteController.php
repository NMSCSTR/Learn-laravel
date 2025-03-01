<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::query()->orderBy('created_at', 'desc')->get();
        // dd($notes);
        return view('note.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, Note $note)
    {
        // return $request->all();
        // return $note; object
        return view('note.show', ['note' => $note]);
    }

    public function edit(Note $note)
    {
        return view('note.edit', ['note' => $note]);
    }
    public function update(Request $request, Note $note)
    {
        //
    }

    public function destroy(Note $note)
    {
        //
    }
}
