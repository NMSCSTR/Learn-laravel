<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" v class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ rout('note.view') }}" class="note-edit-button">View</a>
                        <a href="{{ rout('note.edit') }}" class="note-edit-button">Edit</a>
                        <a href="{{ rout('note.delete') }}" class="note-delete-button">Delete</a>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
</x-layout>
