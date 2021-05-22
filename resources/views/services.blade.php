@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid" style="background-color: #A3A4B6 ;">
        <div class="container">
            <h1 class="display-4" style="padding-bottom: 10px;">Mission</h1>
            <p class="lead"> We, <strong>Technimals group</strong>, are here to support innovative ideas to save world of animals and
                    contribute to the development of biotechnology and bioengineering.</p>
            <?php
            $image2_url='https://caroltorgan.com/wp-content/uploads/2016/03/Picture5.jpg';
            ?>
            <img src="<?php echo $image2_url;?> " >
            <p class="lead">Our <strong> main goal </strong> is to introduce new projects to the world and  attract sponsors to support
                them.</p>
            <?php
            $image_url='https://design-academia.net/wp-content/uploads/2020/10/fig03-1024x460.jpg';
            ?>
            <img src="<?php echo $image_url;?> " >
        </div>
    </div>

@endsection
