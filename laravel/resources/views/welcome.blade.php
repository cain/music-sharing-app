@extends('layouts.app')
@section('subnav')
@include('layouts.subnav')
@endsection
@section('content')
<div class="">
    
        <div class="boundary">
            <div class="panel panel-default">
                <!-- TRACK START -->
                <div class="panel-heading">
                <ul class="track-ul">
                    <li class="track-list">

                    <a href="#"><div class="arrow-up vote" style=""></div></a>
                    <a href="#"><div class="arrow-down vote" style="margin-top:13px;"></div></a>   


                    </li>
                    <li class="track-vote-numbers">
                        23
                    </li><a href="#">
                    <li class="track-type">
                        <img src="img/sc.png">
                    </li>
                    <li class="track-tag">
                        <span class="label label-primary">PLAYLIST</span>
                        <span class="label label-danger">REMIX</span>
                    </li>
                    <li class="track-song">
                        Hyperparade (jacku Remix) - Flume
                    </li>
                    
                    <li class="track-divider ">
                        |
                    </li>
                    <li class="track-title ">
                        <small>One of my favourite flume tracks omg its so good :O</small>
                    </li></a> 
                    <li class="track-desc">
                        <span class="label label-default">By Helixman 12h Ago</span>
                    </li>
                </ul>
                
                </div>
                <!-- TRACK END -->
                

            </div>
            <div class="pagination-buton">

            <button class="btn btn-default"> Next <i class="fa fa-angle-right"></i></button>
                </div>
        </div>


</div>
    
@endsection

@section('footer')
@include('layouts.footer')
@endsection
