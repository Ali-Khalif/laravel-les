<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<link rel="stylesheet" href="{{asset('')}}">-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Home</title>
</head>
<body>

<style>

    .nav-link:hover{
        color: black ;
        background-color: lightseagreen;
    }
    .navbar{
        background-color: lightgrey;
    }


</style>
<nav class="navbar navbar-expand-lg navbar-light  gap-4 p-4 ">
    <a class="navbar-brand" href="{{asset('/')}}">Laravel-Les</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-content-md-center " id="navbarNav">
        <ul class="navbar-nav nav-links  ">
            <li class="nav-item  active">
                <a class="nav-link " href="{{asset('/')}}">Home</a></li>
            <li class="nav-item ">
                <a class="nav-link " href="{{asset('articles')}}">Blog</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{asset('articles/create')}}">Create</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="{{asset('#')}}">Someting</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="{{asset('admin-articles')}}">Admin CRUD</a>
            </li>

            <li class="nav-item  ">
                <a class="nav-link float-md-end" href="{{asset('/contact')}}">Contact</a>

            </li>

        </ul>


    </div>


</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

@yield('content')

@extends('layout/footer')
@section('footer')
@endsection
</body>
</html>
