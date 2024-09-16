<x-app-layout>
    <h3 style="font-size: 30px;" class="my-5">Create a Task</h3>
    <form action="{{route('task.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
         <textarea class="form-control" name="description" id="desc" rows="5"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="imagefile">Task Image</label>
          <input type="file" class="form-control" id="imagefile" name="image"> 
        </div>
        <div class="button" style="display: flex">
            <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Back</a>
        <button type="submit" class="btn btn-outline-primary mx-3">Create</button>
        </div>
      </form>
</x-app-layout>

