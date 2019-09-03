@extends('layout')

@section('title')
    Create a new project
@endsection()

@section('content')
    <form method="POST" action="/projects">
        @csrf

        <div><input type="text" name="title" placeholder="Project title"></div>

        <div><textarea name="description" placeholder="Project description"></textarea></div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection()