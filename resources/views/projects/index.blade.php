@extends('layout')

@section('title')
    Create a new project
@endsection()

@section('content')
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
            <li>{{ $project->description }}</li>
        @endforeach
    </ul>
@endsection()