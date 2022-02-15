@extends('layout/app')
@section('content')
    <div class="container">
        <h1>Contact me</h1>
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label> Name:</label>
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label> Email:</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label>message:</label>
                <textarea name="details" class="form-control" placeholder="your message"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" name="Submit" value="Submit form" placeholder="Submit form">
            </div>
        </form>
    </div>
@endsection
