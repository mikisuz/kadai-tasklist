@extends('layouts.app')

@section('content')
    <h1>id = {{ $task->id }} 詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    <div>
        @if (Auth::id() == $task->user_id)
            {!! link_to_route('tasks.edit','編集',['id' => $task->id],['class' => 'btn btn-default']) !!}
                {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除',['class' => 'btn btn-denger']) !!}
            {!! Form::close() !!}
        @endif
    
@endsection