<x-app-layout>
    <div class="card mt-5">
        <div class="card-body">
          <h5 class="card-title">Note Created Date: {{ $note->created_at }}</h5>
          <p class="card-text">{{$note->note}}</p>
          <div class="button" style="display:flex;">
          <a href="{{ route('note.edit',$note)}}" class="btn btn-info" >Edit</a><br>
            <form action="{{ route('note.destroy',$note)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger mx-2">Delete</button>
            </form>
          </div>
        </div>
      </div>
</x-app-layout>




