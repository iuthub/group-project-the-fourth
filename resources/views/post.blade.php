@extends('master')
@section("content")
    <div class="content-page" >
        <div class="jumbotron jumbotron-fluid"  style="background-color: #A3A4B6">
            <div class="container">
                <h1 class="display-4" id="post_page" >Technimals!</h1>
                <p class="lead" > <h3 style="margin-left:20px;" > <strong> Animal abuser is a looser. </strong> </h3>  </p>
                <div >
                    <img class="home-img" src="{{ asset('/homepic1.png') }}" alt="Do you like animals?" title="">
                    <img class="home-img" src="{{ asset('/homepic2.png') }}" alt="Do you like engineering?" title="">
                    <img class="home-img" src="{{ asset('/homepic3.png') }}" alt="Do you want to support innovations?" title="">
                    <img class="home-img" src="{{ asset('/homepic4.png') }}" alt="You are in RIGHT PLACE" title="">
                </div>
            </div>
        </div>
    </div>

@endsection
