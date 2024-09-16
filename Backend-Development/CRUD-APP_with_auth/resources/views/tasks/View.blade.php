<x-app-layout>
    <h3 style="font-size: 30px;" class="my-5">View Task</h3>
    <form>
        @if($task->image)
        <div class="image" style="text-align: center">
        <img src="{{ asset('storage/' . $task->image) }}" alt="Task Image" class="img-fluid" width="150px">
        </div>
        @endif
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}" readonly>
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
         <textarea class="form-control" name="description" id="desc" rows="5" readonly>{{$task->description}}</textarea>
        </div>
        <div class="button mb-5" style="display: flex">
        <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Back</a>
        </div>
      </form>
</x-app-layout>

