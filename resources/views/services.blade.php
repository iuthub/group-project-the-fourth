@extends('master')
@section("content")
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Mission</h1>
            <p class="lead"><strong>We, Technimals group, are here to support innovative ideas to save world of animals and
                    contribute to the development of biotechnology and bioengineering.</strong></p>
            <?php
            $image2_url='https://caroltorgan.com/wp-content/uploads/2016/03/Picture5.jpg';
            ?>
            <img src="<?php echo $image2_url;?> " style="width: 1000px; height: 300px">
            <?php
            $image_url='https://design-academia.net/wp-content/uploads/2020/10/fig03-1024x460.jpg';
            ?>
            <img src="<?php echo $image_url;?> " style="width: 1000px; height: 300px">
            <p></p>
            <p class="lead"><strong>Our main goal is to introduce new projects to the world and  attract sponsors to support
                    them.</strong></p>

        </div>
    </div>

@endsection
