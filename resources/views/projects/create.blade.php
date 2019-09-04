@extends('layout')

@section('title')
    Create a new project
@endsection()

@section('content')
    <form method="POST" action="/projects">
        @csrf

        <div><input style="{{ $errors->has('title') ? 'border: solid 2px red' : ''}}" type="text" name="title" placeholder="Project title"></div>

        <div><textarea name="description" placeholder="Project description"></textarea></div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection()