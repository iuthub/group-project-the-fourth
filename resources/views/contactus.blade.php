@extends('master')
@section("content")

<div class="container-contact">
    <div class="jumbotron jumbotron-fluid" style="background-color: whitesmoke ;">
        <div class="container" id="cont" >
            <h1 class="display-4" style="text-shadow: 3px 3px #A3A4B6 ;">Contact us</h1>
        </div>
    </div>

    <div class="container custom-login" id="oth" style="max-width: 500px; ">
        <div class="row" >
            <div class="col-sm-4 col-sm-offset-4" >
                <div class="card" >
                    <div class="card-header" style="margin-left:0; padding-left: 0;" >
                    </div>
                    <div class="card-body" >
                        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>
                            @endif
                        <form method="POST"  action="{{route('contact.send')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="name">Name</label>
                                <input type="text"  name="name"  class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text"  name="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea name="msg"  class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right" style="background-color: #4c345c; border: none;">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="eyes" >
        <div class="eye" >
            <div class="ball">
                <div class="shadow"> </div>
            </div>
        </div>
        <div class="eye" >
            <div class="ball">
                <div class="shadow"> </div>
            </div>
        </div>
        <script>
            var balls=document.getElementsByClassName("ball");
            document.onmousemove=function(event){
                var x=event.clientX*80/window.innerWidth+"%";
                var y=event.clientY*100/window.innerHeight+"%";
                for(var i=0;i<2;i++){
                    balls[i].style.left=x;
                    balls[i].style.top=y;
                    balls[i].style.transform=" translate(-"+x+",-"+y+")";
                }
            }
        </script>

    </div>

@endsection
