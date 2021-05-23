@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid" style="background-color: #A3A4B6 ;">
        <div class="container">

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>Project2</title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        </head>
        <body>
        <div id="header">

            <h1 class="display-4">A table-based chain-reaction mechanism to move a chicken egg from A to B</h1>
            <p class="lead">Current conceptual design and prototype aim to move a chicken egg from the point A, which is on the
                table, to the point B, which is on the ground, using mechanism with chain-reaction.</p>
            <p class="lead">The main goal of this prototype is to design such a mechanism and box that chicken egg will be moved
                without any leak and crack after falling to the floor at point B.<p>
            <div style="text-align: center;">
                <?php

                echo "<iframe src=\"report2.pdf\" width=\"100%\" style=\"height:700px\"></iframe>";
                ?>
                <p class="lead"> <strong> Implementation of concept :)</strong></p>
                <?php
                echo "<iframe src=\"2021-05-22 19.07.00.mp4\" width=\"100%\" style=\"height:450px\"></iframe>";
                ?>
            </div>
        </div>

        </center>
        </body>
        </html>
    </div>

@endsection
