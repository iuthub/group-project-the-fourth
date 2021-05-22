@extends('master')
@section("content")
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <div class="container custom-article">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                    <div class="item">
                        <a href="https://www.xavor.com/wp-content/uploads/9-Technology-Trends-that-Will-Rule-2021-and-Beyond.jpg">
                            <img class="slider-img" src="https://www.xavor.com/wp-content/uploads/9-Technology-Trends-that-Will-Rule-2021-and-Beyond.jpg">
                            <div class="carousel-caption slider-text" >
                                <h3>Innovations</h3>
                            </div>
                        </a>

                    </div>

                <div class="item active">
                    <a href="https://technographx.com/wp-content/uploads/2020/12/Top-New-Technology-Trends-for-2021.png">
                        <img class="slider-img" src="https://technographx.com/wp-content/uploads/2020/12/Top-New-Technology-Trends-for-2021.png">
                    </a>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

        <div class="container" >
        <div class="trending-wrapper" ">
        @foreach($articles as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <p>Author: {{$item['author']}}</p>
                        <p>Category: {{$item['category']}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>



@endsection
