<x-app-layout>
    <h3 style="font-size: 30px;" class="my-5">Edit Task</h3>
    <form action="{{route('task.update',$task)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
         <textarea class="form-control" name="description" id="desc" rows="5">{{$task->description}}</textarea>
        </div>
        @if($task->image)
            <img src="{{ asset('storage/' . $task->image) }}" alt="Task Image" class="img-fluid" width="150px">
        @endif
        <div class="my-3">
          <input type="file" class="form-control" name="image"> 
        </div>
        <div class="button mb-5" style="display: flex">
        <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Back</a>
        <button type="submit" class="btn btn-outline-primary mx-3">Update</button>
        </div>
      </form>
</x-app-layout>

