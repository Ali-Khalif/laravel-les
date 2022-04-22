@extends('layout/app')
@section('content')
    <div class="Home">
        <h1> Welcome</h1>

        <div class="Add">

            <a href="{{url('/articles/create')}}">
                Add new Article
            </a>
        </div>
        <!--gegevens uit de database hallen-->
        @foreach($articles as $article )
            <article>
                <!-- wanneer op de title van de article is geklikt wordt je naar article pagine  -->
                <a href="{{route('articles.show',$article->id)}}">{{ $article -> title  }}
                <!--show content Str::limit($article->content,20)-->
                <p>{{ Str::limit($article->content,50) }}</p>
                </a>



            </article>
        @endforeach
    </div>

@endsection
