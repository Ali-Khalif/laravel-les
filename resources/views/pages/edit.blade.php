@extends('layout/app')
@section('content')
    <div class="create">

        <h4>ADD A NEW ARTICLE</h4>
        <hr>
        @if(Session::get('succes'))
            <div class="alert alert-success" style="">
                {{ Session::get('succes') }}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif


        <form class="form" method="POST" action="{{ route('articles.update', $article->id)}}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Enter article title"
                       value="{{ $article->title}}">
                <span style="color: red">@error('title'){{ $message  }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="Content">Content:</label>
                <textarea class="form-control" name="content" placeholder="Enter article content">
                    {{ $article->content}}
                </textarea>

            </div>

            <div class="form-group">
                <input type="submit" class="form-control" name="insert" value="Save Article ">
            </div>
        </form>
    </div>
@endsection
