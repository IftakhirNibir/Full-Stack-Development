<x-layout>
    <h1>Edit Note</h1>
    <form action="{{ route('note.update', $note)}}" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Note</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">{{$note->note}}</textarea>
      </div>
      <div class="mb-3" style="display: flex">
      <a href="{{ route('note.index') }}" class="btn btn-warning">Cancel</a>
      <a href="" class="btn btn-primary mx-3">Submit</a>
      </div>
    </form>
</x-layout>



 