@extends('layouts.app')

@section('content')

    <h1>作成ページ</h1>

    @include('commons.error_tasks')

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection