<x-layout>
    <h3 class="text-center m-5">All the task list showing here</h3>
    <div class="image mb-2 text-center">
        <img src="https://media.istockphoto.com/id/1191641296/vector/post-it-paper-with-red-pin-on-white-background-vector-illustration-green-pink-blue-yellow.jpg?s=612x612&w=0&k=20&c=hcFC28l1b1RKyFM0AX6-SDzoMyY5Rzc4ab3yFodY418=" class="img-fluid" style="width: 15%;">
    </div>
    
    <a href="{{ route('task.create') }}" class="btn btn-outline-primary mb-2">Create Task</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <td>
            @if($task->image)
            <img src="{{ asset('storage/' . $task->image) }}" alt="Task Image" class="img-fluid" style="width: 100px; height: 50px; object-fit:cover;">
            @endif
            </td>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <td>
                <a href="{{route('task.edit',$task)}}" class="btn btn-outline-info">Edit</a>
            </td>
            <td>
                <form action="{{ route('task.destroy', $task) }}" method="POST" onsubmit="return confirmDelete();">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this task? This action cannot be undone.');
        }
    </script>
    
</x-layout>