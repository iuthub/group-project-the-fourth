@extends('master')
@section("content")
    <div class="content-page" >
        <div class="jumbotron jumbotron-fluid"  style="background-color: #A3A4B6">
            <div class="container">
                <h1 class="display-4" >Technimals!</h1>
                <p class="lead"  > <h3 style="margin-left:20px;"> <strong> Animal abuser is a looser. </strong> </h3>  </p>
                <div >
                    <img class="home-img" src="{{ asset('/homepic1.png') }}" alt="Who we are" title="">
                    <img class="home-img" src="{{ asset('/homepic2.png') }}" alt="Who we are" title="">
                    <img class="home-img" src="{{ asset('/homepic3.png') }}" alt="Who we are" title="">
                    <img class="home-img" src="{{ asset('/homepic4.png') }}" alt="Who we are" title="">
                </div>
            </div>
        </div>
    </div>

@endsection
