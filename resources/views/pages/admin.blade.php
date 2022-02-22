@extends('layout.app')
@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-width: 100%;
        }

        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box input {
            height: 34px;
            border-radius: 20px;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }

        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }
        .btn-danger{
            color: #E34724;;
            display: inline-block;
            margin: 0 5px;

        }
        table.table td a{
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }
        table.table td form button{
            background-color: transparent;
            display: inline-block;

        }

        table.table td i {
            font-size: 19px;
        }



        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

    </style>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5"><h2>Article <b>Gegevens</b></h2>

                        </div>
                        <div class="col-sm-3 ">
                            <a class="col-sm-4 bg-white" href="/create">
                                <button class="bg-info p-1 border-0">ADD NEW ARTICLE</button>
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
                @if(Session::get('succes'))
                    <div class="alert alert-success text-center" style="">
                        {{ Session::get('succes') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger text-center">
                        {{ Session::get('fail') }}
                    </div>
                @endif
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

                            <td>
                                <a href="/article/{{$article->id}}" class="view " title="View" data-toggle="tooltip"><i
                                        class="material-icons">&#xE417;</i></a>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                        class="material-icons">&#xE254;</i></a>

                                <a href="/artices.destroy/{{$article->id}}" class="delete"
                                   onclick="return confirm('Weet je zeker dat je article met de ID {{$article->id}} en de deze {{$article->title}}  wilt verwijderen?')"
                                   title="Delete" data-toggle="tooltip"><i
                                        class="material-icons">&#xE872;</i></a>
                                <form method="post" action="{{ route('articles.destroy',$article->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete btn-danger "
                                            onclick="return confirm('Weet je zeker dat je article met de ID {{$article->id}} en de deze {{$article->title}}  wilt verwijderen?')"
                                            title="Delete" data-toggle="tooltip"><i
                                            class="material-icons">&#xE872;</i></button>
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
