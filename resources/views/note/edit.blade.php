<x-layout>
    <div>
        <h1>Edit note</h1>
        <form action="{{ route('note.update', $note->id) }}" method="POST">
            <textarea name="note" id="" cols="30" rows="10">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <buttonc class="note-submit-button">Submit</button>
            </div>22
        </form>
    </div>
</x-layout>
