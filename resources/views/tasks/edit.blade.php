@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} 編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', '編集ページ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('編集', ['class' => 'btn btn-light']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection