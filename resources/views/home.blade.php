@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/3accbd55325064a054b1988f8c1a571f/5D559A0C/t51.2885-19/s150x150/47585833_2239633316250757_2164184843078860800_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
                <div class="d-flex">
                    <div class="pr-5">
                        <strong>153</strong>
                        posts
                    </div>
                    <div class="pr-5">
                        <strong>123k</strong>
                        followers
                    </div>
                    <div class="pr-5">
                        <strong>134k</strong>
                        following
                    </div>
                </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2253916/pexels-photo-2253916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2258536/pexels-photo-2258536.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2257502/pexels-photo-2257502.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="w-100 h-50">
    </div>
</div>
@endsection
