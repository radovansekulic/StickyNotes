<?php

namespace App\Http\Controllers;

use App\Repositories\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    private NoteRepository $noteRepository;
    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }
    public function createNote(Request $request, $userId)
    {
        $validatedData = $request->validate([
            'note' => 'required|string|max:255',
        ]);

        $validatedData['userId'] = $userId;
        $this->noteRepository->create($validatedData);
        return redirect(route('dashboard'));
    }
}
