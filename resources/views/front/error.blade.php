@extends('front.master')
@section('content')


<!-- main content -->
<div class="main">
    <div class="container">

        <div class="error">
            <h2>Error 404</h2>
            <p>للعودة الى الصفحة الرئيسية اضغط هنا</p>

            <div class="btns">
                <a class="btn wow pulse" href="{{url('index')}}" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="1.5s">الصفحة الرئيسية</a>
            </div>
        </div>

    </div>
</div>
@stop
