@extends('layout.app')
@section('content')


    <div class="Home">
        <h1> My Articles</h1>

        <div class="Add">

            <a href="{{url('/articles/create')}}">
                Add new Article
            </a>
        </div>
        @foreach($articles as $article )
            <article>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article -> title  }}</a>
                <p> {{ $article -> content }}</p>

            </article>
        @endforeach
    </div>


@endsection
