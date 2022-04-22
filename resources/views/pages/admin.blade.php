@extends('layout.app')
@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5"><h2>Article <b>Gegevens</b></h2>

                        </div>
                        <div class="col-sm-3 ">
                            <a class="col-sm-4 bg-white" href="articles/create">
                                <button class="btn btn-lg bg-info p-1">ADD NEW ARTICLE</button>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <table class="table table-striped table-hover table-bordered ">
                    @foreach($articles as $article)



                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title <i class="fa fa-sort"></i></th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article -> title}}</td>

                            <td class="">
                                <!--show button-->
                                <a href="{{route('articles.show', $article->id) }}">
                                    <button class="btn btn-primary btn-md ">
                                        View
                                    </button>
                                </a>

                                <a href="{{ route('articles.edit', $article->id) }}">
                                    <button class="btn  btn-warning btn-md ">Edit</button>
                                </a>

                                <form class="Delete" action="{{ route('articles.destroy', $article->id) }}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-md "
                                            onclick="return confirm('weet je zeker dat je article met ID {{$article->id}} en de Title {{$article->title}} wilt verwijderen?')">
                                        Delete
                                    </button>
                                </form>


                            </td>
                        </tr>


                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
