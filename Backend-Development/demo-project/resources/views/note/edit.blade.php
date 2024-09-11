<x-app-layout>
    <h1>Edit Note</h1>
    <form action="{{ route('note.update', $note)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Note</label>
        <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="10">{{$note->note}}</textarea>
      </div>
      <div class="mb-3" style="display: flex">
      <a href="{{ route('note.index') }}" class="btn btn-warning">Cancel</a>
      <button type="submit" class="btn btn-primary mx-3">Submit</button>
      </div>
    </form>
</x-app-layout>



 