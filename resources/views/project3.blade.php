@extends('master')
@section("content")
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <div class="container custom-login">

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>Project2</title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        </head>
        <body>
        <div id="header">

            <h1 class="display-4">Mr. Bug</h1>
            <p class="lead">There are a lot global and local problems which need to be solved. In our current project,
                we want to focus on two big issues namely crime and healthcare. We have to consider road traffic offense
                as a crime. So how can we solve those problems? </p>
            <p class="lead">Our concept robot Mr. Bug is answer. Even the term “bug”
                in programming means something causing problem, our robot Mr. Bug is intended to solve problems.
            <p>
            <div style="text-align: center;">
                <p class="lead"><strong> 3D model of concept </strong></p>
                <?php
                echo "<iframe src=\"video3.mp4\" width=\"60%\" style=\"height:450px\"></iframe>";
                ?>
                <p class="lead"><strong> Annotation </strong></p>
                <?php
                echo "<iframe src=\"Annotation_MrBug.pdf\" width=\"60%\" style=\"height:700px\"></iframe>";
                ?>
                <p class="lead"><strong> Presentation </strong></p>
                <?php
                echo "<iframe src=\"report3.pdf\" width=\"60%\" style=\"height:450px\"></iframe>";
                ?>
            </div>
        </div>

        </center>
        </body>
        </html>
    </div>

@endsection
