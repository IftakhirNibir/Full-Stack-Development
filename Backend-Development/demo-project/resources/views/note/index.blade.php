<x-app-layout>
    <h1 class="text-center" style="font-size:xx-large">All Notes</h1>
    <a href="{{ route('note.create') }}" class="btn btn-primary">Create New</a>
    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">User_ID</th>
            <th scope="col">ID</th>
            <th scope="col">Note</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
            <tr>
                <td>{{$note->user_id}}</td>
                <th scope="row">{{ $note->id }}</th>
                <td>{{ Str::words($note->note, 30) }}</td>
                <td><a href="{{ route('note.show',$note)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{ route('note.edit',$note)}}" class="btn btn-warning">Edit</a></td>
                <td>
                <form action="{{ route('note.destroy',$note)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$notes->links()}}
</x-app-layout>



