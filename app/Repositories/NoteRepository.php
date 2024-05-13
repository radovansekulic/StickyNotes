<?php

namespace App\Repositories;

use App\Models\Note;

class NoteRepository
{
    public function create($note)
    {
        return Note::create([
            'note' => $note['note'],
            'user_id' => $note['userId'],
        ]);
    }
}
