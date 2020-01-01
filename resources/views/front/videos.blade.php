@extends('front.master')
@section('content')
<style>
    .main h6 {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 15%;
    }
    .main .video_content a video{
        width: 100%;
        border: 2px solid #f3e5b8;
        border-radius: 5px;
    }
</style>
<!-- main content -->


<div class="main">
    <div class="container">
        <div class="row">
                <?php 
                $image =$contents[0]->service->provider->image ;
                ?>
            @foreach($contents as $video)
<?php 
$title = $video->service->provider->title ;
?>
            <div class="col-6">
                <div class="video_content">
                    <div class="over"></div>
                    <a href="{{url('view_content/'.$video->id)}}">
                        <div class="play_icon"><i class="far fa-play-circle fa-2x"></i></div>
                     
                        <div class="title_content">
                            <img src="{{url($image)}}" alt="{{$title}}">
                        </div>
                    </a>
                </div>
                <h6>{{$video->title}}</h6>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- end main content -->
@stop