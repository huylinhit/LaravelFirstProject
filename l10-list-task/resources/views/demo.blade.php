This is demo file
<ul>
    <li>Title: </li>

    @forelse ($tasks as $task)
        <a href="{{route('task.show' , [
            'id' => $task->id

        ]) }}"><li>{{$task->description}}</li></a>
    @empty
        
    @endforelse
</ul> 