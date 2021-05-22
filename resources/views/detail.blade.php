@extends('master')
@section("content")
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <div class="container">
        <a href="/blog">Go back</a>
        <div class="row" align="center">
            <h1 style="margin-top: 30px">{{$article['name']}}</h1>
            <h4>Author: {{$article['author']}}</h4>
            <h4>Category: {{$article['category']}}</h4>
        </div>
        <h5 style="margin-top: 50px">{{$article['description']}}</h5>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="article_id" value="{{$article['id']}}">
            <button class="btn btn-primary" style="margin-top: 50px; margin-left: 10px">Add to favorite list</button>
        </form>
    </div>


@endsection
