@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid" style="background-color: #A3A4B6 ;">
        <div class="container">
            <h1 class="display-4">Facts</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
 <div>
                <img src="{{ asset('/fact1.png') }}" alt="fact1" title="" style="width: 460px; height: 600px ">
                <img src="{{ asset('/fact2.png') }}" alt="fact2" title="" style="width: 460px; height: 600px ">
                <p></p>
                <img src="{{ asset('/fact3.png') }}" alt="fact3" title="" style="width: 460px; height: 600px ">
                <img src="{{ asset('/fact4.png') }}" alt="fact4" title="" style="width: 460px; height: 600px ">
                <p></p>
                <img src="{{ asset('/fact5.png') }}" alt="fact5" title="" style="width: 460px; height: 600px ">
                <img src="{{ asset('/fact6.png') }}" alt="fact6" title="" style="width: 460px; height: 600px ">
            </div>
<ul>
   <li> <a href="project1">See project 1</a> </li>
   <li> <a href="project2">See project 2</a> </li>
    <li> <a href="project3">See project 3</a> </li>
</ul>
    </div>
    </div>
@endsection
