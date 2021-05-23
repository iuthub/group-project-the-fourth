@extends('master')
@section("content")


    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <div class="container">
        @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
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
            <button class="btn btn-primary" style="margin-top: 50px; margin-left: 10px; margin-bottom: 50px">Add to favorite list</button>


        </form>
        <div class="card my-5">
            <h3 class="card-header" align="center">Add Comment</h3>
            <div class="card-body">
                <form method="post" action="{{url('save-comment/'.$article->id)}}">
                    @csrf
                    <textarea name="comment" class="form-control" style="margin-bottom: 20px" ></textarea>
                    <input type="submit" class="btn btn-primary mt-2"/>
                </form>
            </div>
        </div>

            @foreach($article as $comment)
                <div class="trending-item">
                    <div class="">
                        <h3>Comment</h3>
                        <p>Author: NewUser</p>
                        <p>Good job!</p>
                    </div>
                </div>
            @endforeach
    </div>



@endsection
