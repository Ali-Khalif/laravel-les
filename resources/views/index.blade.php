@extends('layout/app')
@section('content')
    <div class="Home">
        <h1> Welcome</h1>

        <div class="Add">

            <a href="{{asset('/create')}}">
                Add new Article
            </a>
        </div>
        <!--gegevens uit de database hallen-->
        @foreach($articles as $article )
            <article>
                <!-- wanneer op de title van de article is geklikt wordt je naar article pagine  -->
                <a href="/article/{{$article['id']}}">{{ $article -> title  }}</a>
                <p> click on the title to read this Article</p>
            </article>
        @endforeach
    </div>

@endsection
