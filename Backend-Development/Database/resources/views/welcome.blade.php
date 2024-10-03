<h1>All Students Info</h1>
    <h4>
        Student ID |
        Student Name | 
        Student Email | 
        Student Age | 
        Student City |
        View  |
        Delete 
    </h4>
@foreach ($data as $student_data)
    <p>
        {{$student_data->id}} |
        {{$student_data->name}} | 
        {{$student_data->email}} | 
        {{$student_data->age}} | 
        {{$student_data->city}} |
        <a href="{{route('single_std',$student_data->id)}}">View</a>
        <a style="color:red;" href="{{route('delete_std',$student_data->id)}}">Delete</a>
    </p>
@endforeach


