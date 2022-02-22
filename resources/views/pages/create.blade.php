@extends('layout.app')

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


        <form class="form" method="POST" action="{{ route('articles.store')}}">
            @csrf

            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Enter article title"
                       value="{{ old('title') }}">
                <span style="color: red">@error('title'){{ $message  }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="Content">Content:</label>
                <textarea name="content" class="form-control" placeholder="Enter article content"
                          value="{{ old('content') }}"></textarea>
                <span style="color: red">@error('content'){{ $message  }} @enderror</span>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" name="insert" value="Save Article ">
            </div>
        </form>
    </div>
    </div>
    </div>
@endsection
