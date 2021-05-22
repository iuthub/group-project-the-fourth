@extends('master')
@section("content")
    <div class="">

            <div class="trending-wrapper">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4" align="center">Your list</h1>
                    </div>
                </div>

                @foreach($articles as $item)
                    <div class="row searched-item cart-list-devider" align="center">
                        <a href="detail/{{$item->id}}">
                            <div class="col-sm-20">
                                <h2>{{$item->name}}</h2>
                                <h5>Author: {{$item->author}}</h5>
                                <h5>Category: {{$item->category}}</h5>
                            </div>
                            </a>
                        <div class="col-sm-20">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" style="margin-bottom: 50px" >Remove</a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
