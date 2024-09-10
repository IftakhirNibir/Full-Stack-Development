<x-layout>
    <div class="card mt-5">
        <div class="card-body">
          <h5 class="card-title">Note Created Date: {{ $note->created_at }}</h5>
          <p class="card-text">{{$note->note}}</p>
          <a href="{{ route('note.edit',$note)}}" class="btn btn-info" >Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
      </div>
</x-layout>


