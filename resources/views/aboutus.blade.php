@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid" style="background-color: #A3A4B6 ;">
        <div class="container">
            <h1 class="display-4">About us</h1>

            <div>
                <img src="{{ asset('/who.png') }}" alt="Who we are" title="" style="width: 460px; height: 600px ">
                <img src="{{ asset('/what.png') }}" alt="What we are" title="" style="width: 460px; height: 600px ">
                <p></p>
                <img src="{{ asset('/why .png') }}" alt="Why we are" title="" style="width: 460px; height: 600px ">
                <img src="{{ asset('/how.png') }}" alt="How to find us" title="" style="width: 460px; height: 600px ">
            </div>

        </div>
    </div>
@endsection
