@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid" style="background-color: #A3A4B6 ;">
        <div class="container">

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>Project1</title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        </head>
        <body>
        <div id="header">

            <h1 class="display-4"> AntiAccident for animals</h1>
            <p class="lead">Animals are our companions, our workers, our eyes and ears, and our food. They appear in
                ancient cave
                paintings, and on modern commercial farms. We have domesticated some of them, while others remain wild
                and are sometimes endangered by our activities. They keep us company, and while they can provide comic
                relief, they also serve us as valuable assistants. However, some problems related to their health and
                safety occur in our modern world.</p>
            <h2>Current conceptual design aims to solve three of those issues, namely accidents, stealing and loss.</h2>

                <?php

                echo "<iframe src=\"report1.pdf\" width=\"100%\" style=\"height:700px\"></iframe>";
                ?>
                <div style="text-align: center;"><p class="lead"><strong> Look at the concept 3D animation :)</strong>
                    </p></div>
                <?php
                echo "<iframe src=\"mod_horse.mp4\" width=\"100%\" style=\"height:450px\"></iframe>";
                ?>

        </div>


        </body>

        </html>
    </div>

@endsection
