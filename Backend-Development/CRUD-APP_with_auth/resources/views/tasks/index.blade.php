<x-app-layout>
    <h3 style="font-size: 30px;" class="text-center m-5">All the task list showing here</h3>
    <div class="image mb-2 text-center d-flex justify-content-center">
      <img src="https://media.istockphoto.com/id/1191641296/vector/post-it-paper-with-red-pin-on-white-background-vector-illustration-green-pink-blue-yellow.jpg?s=612x612&w=0&k=20&c=hcFC28l1b1RKyFM0AX6-SDzoMyY5Rzc4ab3yFodY418=" class="img-fluid" style="width: 18%;">
  </div>
  
    
    <a href="{{ route('task.create') }}" class="btn btn-outline-primary mb-2">Create Task</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">UserName</th>
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
              {{ $task->user->name }}
            </td>
            <td>
            @if($task->image)
            <img src="{{ asset('storage/' . $task->image) }}" alt="Task Image" class="img-fluid" style="width: 100px; height: 50px; object-fit:cover;">
            @endif
            </td>
            <td><a style="text-decoration: none;color:black;" href="{{route('task.show',$task)}}">{{$task->name}}</a></td>
            <td>{{$task->description}}</td>
            <td>
    
            @if ($task->user_id == request()->user()->id)
            <a href="{{route('task.edit',$task)}}" class="btn btn-outline-info">Edit</a>
            @endif
        
            </td>
            <td>
              @if ($task->user_id == request()->user()->id)
                <form action="{{ route('task.destroy', $task) }}" method="POST" onsubmit="return confirmDelete();">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
              @endif
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
    
</x-app-layout>




