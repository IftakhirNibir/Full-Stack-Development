<x-layout>
    <h1>Create Note</h1>
    <form action="{{ route('note.store')}}" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Note</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
      </div>
      <div class="mb-3" style="display: flex">
      <a href="{{ route('note.index') }}" class="btn btn-warning">Cancel</a>
      <a href="" class="btn btn-primary mx-3">Submit</a>
      </div>
    </form>
</x-layout>



 