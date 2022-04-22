@extends('layout.app')
@section('content')

    <style>

    </style>
    <div class="container">
        <div class="content">
            <h2 class="modal-title text-decoration-underline">{{$article['title']}}</h2>
            <p class="text-body">{{$article['content']}}</p>
            <div class="btn-link" style="color: #0a53be"><a href="/"><button class="btn btn-lg">
                        Ga terug naar de homepage
                    </button>
                </a></div>

        </div>
    </div>


@endsection
