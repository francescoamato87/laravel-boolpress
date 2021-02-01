@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> CREATE NEW POST</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                 @endforeach
            </div>
        @endif

        <form action=" {{route('admin.posts.store')}} " method="POST"></form>
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">POST TITLE</label>
            <input type="text" name="title" id="title" value=" {{old('title')}} ">
        </div>

        <div class="form-group">
            <label for="body">POST CONTENT</label>
            <textarea name="body" id="body" cols="120" rows="15"> {{old('body')}} </textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Create Post">

    </div>
@endsection
