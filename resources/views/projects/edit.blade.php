@extends('layout')

@section('content')

    <h1>Edit Project</h1>

    <form class="" action="/projects/{{ $project->id }}" method="POST">

        @method('PATCH')
        @csrf

        <div class="field">

            <label class="label" for="title">Title</label>

            <div class="control">

                <input class="input" type="text" name="title" placeholder="Title" value="{{ $project->title }}">

            </div>

        </div>

        <div class="field">

            <label class="label" for="description">Description</label>

            <div class="control">

                <textarea class="textarea" name="description">{{ $project->description }}</textarea>

            </div>

        </div>

        <div class="field">

            <div class="control">

                <button class="button is-link" type="submit">Update Project</button>

            </div>

        </div>

    </form>

    <form class="" action="/projects/{{ $project->id }}" method="POST">

        @method('DELETE')
        @csrf

        <div class="field">

            <div class="control">

                <button class="button is-link" type="submit">Delete Project</button>

            </div>

        </div>

    </form>

@endsection
