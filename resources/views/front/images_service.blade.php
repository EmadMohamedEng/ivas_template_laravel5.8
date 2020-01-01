@extends('front.master')
@section('content')

<style>
    .main h6 {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 15%;
    }
</style>

<!-- main content -->
<div class="main">
    <div class="container">
        <div class="row">
            <?php 
                $image =$contents[0]->service->provider->image ;
                ?>
            @foreach($contents as $value)

            <?php 
$title = $value->service->provider->title ;

?>
            <div class="col-6">
                <div class="video_content">
                    <a href="{{url('view_content/'.$value->id)}}">
                        <div class="over"></div>
                        <img src="{{url($image)}}" alt="{{$value->title}}">
                    </a>
                </div>
                <h6>{{$value->title }}</h6>

            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- end main content -->

@stop