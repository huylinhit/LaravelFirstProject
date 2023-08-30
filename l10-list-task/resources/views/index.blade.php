<h1>
    The list of tasks
</h1>

<div>
    @if(count($tasks))
        <div>The are tasks</div>
        <ul>
        @forelse ($tasks as $task)
            <li><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}</a></li>
        @empty
            <div>There is no task</div>

        @endforelse
        </ul>
    @else
        <div>The are not tasks</div>
    @endif
</div>