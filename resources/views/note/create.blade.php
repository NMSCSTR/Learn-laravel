<x-layout>
    <div>
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <textarea name="note" id="" cols="30" rows="10"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <buttonc class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
